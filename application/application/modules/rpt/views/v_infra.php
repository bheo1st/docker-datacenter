<div class="card">
    <div class="card-body">
        <h4 class="card-title">Laporan Shift</h4>
        <div class="row">
            <div class="col-12">
                <div>
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-sm"><i class="mdi mdi-play-circle ml-1"></i> Filter</button>
                    <button type="button" id="btn-refresh" class="btn btn-info btn-sm"><i class="mdi mdi-play-circle ml-1"></i> Refresh</button>
                </div>
                <br>
                <table id="order-listing" class="table table-responsive" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No #</th>
                            <th>Rack</th>
                            <th>Room</th>
                            <th>Gedung</th>
                            <th>Company</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Form Search Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <div class="form-group">
                    <label class="col-md-12 control-label" for="textinput">Date Filter</label>
                    <div class="col-md-12">
                        <input id="date" name="date" type="text" placeholder="" class="form-control" autocomplete="off">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 control-label" for="textinput">Lokasi</label>
                    <div class="col-md-12">
                        <select id="lokasi" name="lokasi" class="form-control form-control-lg" aria-label=".form-select-lg example">
                            <option selected disabled>Silahkan Pilih Lokasi</option>
                            <?php

                            foreach ($listLokasi as $row) {
                                echo "<option value='" . $row['id_lokasi'] . "'>" . $row['nama_lokasi'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

            </div>


            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" id="btn-export-excel" class="btn btn-primary">Export Excel</button>
                <button type="button" id="btn-search" class="btn btn-success" data-dismiss="modal">Search</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<!-- END Modal -->

<script>
    var table = $('#order-listing').DataTable({
        'processing': true,
        'serverSide': true,
        'searching': false,
        'serverMethod': 'post',
        'ajax': {
            'url': '<?= site_url('rpt/c_infra/read') ?>',
            'type': 'POST',
            "data": function(data) {
                data.date = $('#date').val(),
                    data.lokasi = $('#lokasi').val();
            }
        },
        oLanguage: {
            sProcessing: '<div class=\"bar-loader\"><span></span><span></span><span></span><span></span></div>Fetching data from the server...'
        },
        'columns': [{
                data: 'rack_id',
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'rack_name'
            },
            {
                data: 'room_name'
            },
            {
                data: 'gedung_name'
            },
            {
                data: 'company_name'
            }
        ],
    });

    $('#btn-search').click(function() { //button filter event click
        table.ajax.reload(); //just reload table
        $('#myModal').modal('hide')
    });

    $('#btn-refresh').click(function() { //button filter event click
        table.ajax.reload(); //just reload table
    });

    var start = moment().subtract(1, 'days');
    var end = moment().subtract(1, 'days');

    function cb(start, end) {
        $('#date span').html(start.format('YYYY/MM/DD') + ' - ' + end.format('YYYY/MM/DD'));
    }

    $('#date').daterangepicker({
        startDate: start,
        endDate: end,
        dateLimit: {
            months: 1
        },
        locale: {
            cancelLabel: 'Clear'
        }
    }, function(start, end, label) {
        cb(start, end);
        $('#order-listing').DataTable().ajax.reload();

    });

    cb(start, end);

    $('#date').val("");

    $('#date').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));
    });

    $('#date').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });

    $("#btn-export-excel").click(function() {
        var excel_tanggal = ($('#date').val() == null ? '' : $('#date').val());
        var excel_lokasi = ($('#lokasi').val() == null ? '' : $('#lokasi').val());
        var urlExportExcel = `<?= site_url(); ?>rpt/c_infra/exportExcel?lokasi=` + excel_lokasi + `&date=` + excel_tanggal;
        window.open(urlExportExcel, '_blank');

    });
</script>