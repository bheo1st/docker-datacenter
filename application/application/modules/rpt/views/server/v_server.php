<div class="card">
    <div class="card-body">
        <h4 class="card-title">Laporan Rack Server</h4>
        <div class="row">
            <div class="col-12">
                <div>
                    <button type="button" id="btn-export-excel" class="btn btn-primary">Export Excel</button>
                </div>
                <br>
                <table id="order-listing" class="table table-responsive" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No #</th>
                            <th>Name Server</th>
                            <th>Server IP</th>
                            <th>TYPE OS</th>
                            <th>CPU</th>
                            <th>RAM</th>
                            <th>STORAGE</th>
                            <th>IN RACK</th>
                            <th>IN ROOM</th>
                            <th>IN GEDUNG</th>

                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    var table = $('#order-listing').DataTable({
        'processing': true,
        'serverSide': true,
        'searching': false,
        'serverMethod': 'post',
        'ajax': {
            'url': '<?= site_url('rpt/c_server/read') ?>',
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
                data: 'server_id',
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'server_name'
            },
            {
                data: 'server_ip'
            },
            {
                data: 'type_os'
            },
            {
                data: null,
                sortable: false,
                render: function(data, type, full) {
                    return data.server_cpu + " Core";
                }
            },
            {
                data: null,
                sortable: false,
                render: function(data, type, full) {
                    return data.server_ram + " GB";
                }
            },
            {
                data: null,
                sortable: false,
                render: function(data, type, full) {
                    return data.server_storage + " GB";
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
            }

        ],
    });

    $("#btn-export-excel").click(function() {

        var urlExportExcel = `<?= site_url(); ?>rpt/c_server/exportExcel`;
        window.open(urlExportExcel, '_blank');

    });
</script>