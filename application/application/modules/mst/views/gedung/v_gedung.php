<div class="card">
    <div class="card-body">
        <h4 class="card-title">Gedung</h4>
        <div class="row">
            <div class="col-12">
                <div>
                    <button type="button" onclick="location.href='<?= site_url(); ?>mst/c_gedung/formGedung?action=add';" class="btn btn-sm add-new"><i class="fa fa-plus"></i> Add New</button>
                </div>
                <br>
                <table id="order-listing" class="table table-responsive" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No #</th>
                            <th>Action</th>
                            <th>Gedung</th>
                            <th>Company</th>
                            <th>alamat</th>
                            <th>Created Date</th>
                            <th>Created By</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(() => {
            $('#order-listing').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url': '<?= site_url('mst/c_gedung/read') ?>',
                    'type': 'POST'
                },
                oLanguage: {
                    sProcessing: '<div class=\"bar-loader\"><span></span><span></span><span></span><span></span></div>Fetching data from the server...'
                },
                'columns': [{
                        data: 'gedung_name',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: null,
                        sortable: false,
                        render: function(data, type, full) {
                            return `
						<a class="btn btn-sm btn-primary px-2 py-1" href="<?= site_url("mst/c_gedung/formGedung?action=edit&id=`+data.gedung_id+`") ?>">
	                    <i class="fa fa-pencil mr-0"></i> </a>
	                	<a class="btn btn-sm btn-danger px-2 py-1" id="delete_data" onclick="delete_data('gedung', '` + data.gedung_id + `')"
	                    href="#"> <i class="fa fa-trash-o mr-0"></i> </a>
					`;
                        }
                    },
                    {
                        data: 'gedung_name'
                    },
                    {
                        data: 'company_name'
                    },
                    {
                        data: 'gedung_address'
                    },
                    {
                        data: 'created_at'
                    },
                    {
                        data: 'created_by'
                    }
                ]
            });
        });
    </script>