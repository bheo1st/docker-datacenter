<div class="card">
    <div class="card-body">
        <h4 class="card-title">Laporan Virtual Server</h4>
        <div class="row">
            <div class="col-12">
                <div>
                    <button type="button" id="btn-export-excel" class="btn btn-primary">Export Excel</button>
                    <button type="button" id="btn-export-pdf" class="btn btn-info btn-sm">Export PDF</button>
                </div>
                <br>
                <table id="order-listing" class="table table-responsive" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No #</th>
                            <th>Virtual Name</th>
                            <th>IP</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>In Server</th>
                            <th>In Rack</th>
                            <th>In Room</th>
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
            'url': '<?= site_url('rpt/c_virtual/read') ?>',
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
                data: 'virtual_id',
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'virtual_name'
            },
            {
                data: 'virtual_ip'
            },
            {
                data: 'virtual_username'
            },
            {
                data: 'virtual_password'
            },
            {
                data: 'server_name'
            },
            {
                data: 'rack_name'
            },
            {
                data: 'room_name'
            },
        ],
    });

    $("#btn-export-excel").click(function() {

        var urlExportExcel = `<?= site_url(); ?>rpt/c_virtual/exportExcel`;
        window.open(urlExportExcel, '_blank');

    });
    $("#btn-export-pdf").click(function() {
        var urlExportPdf = `<?= site_url(); ?>rpt/c_virtual/exportPdf`;
        window.open(urlExportPdf, '_blank');


    });
</script>