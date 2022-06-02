<div class="card">
    <div class="card-body">
        <h4 class="card-title">Laporan Rack Server</h4>
        <div class="row">
            <div class="col-12">
                <div>
                    <button type="button" id="btn-export-excel" class="btn btn-primary">Export Excel</button>
                    <button type="button" id="btn-export-pdf" class="btn btn-info btn-sm">Export PDF</button>
                </div>
                <div>
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

    <script>
        var table = $('#order-listing').DataTable({
            'processing': true,
            'serverSide': true,
            'searching': false,
            'serverMethod': 'post',
            'ajax': {
                'url': '<?= site_url('rpt/c_rack/read') ?>',
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

        $("#btn-export-excel").click(function() {
            var urlExportExcel = `<?= site_url(); ?>rpt/c_rack/exportExcel`;
            window.open(urlExportExcel, '_blank');


        });
        $("#btn-export-pdf").click(function() {
            var urlExportPdf = `<?= site_url(); ?>rpt/c_rack/exportPdf`;
            window.open(urlExportPdf, '_blank');


        });
    </script>