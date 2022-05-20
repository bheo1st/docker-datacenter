<div class="card">
    <div class="card-body">
        <h4 class="card-title">SERVER</h4>
        <div class="row">
            <div class="col-12">
                <div>
                    <button type="button" onclick="location.href='<?= site_url(); ?>mst/c_server/formServer?action=add';" class="btn btn-sm add-new"><i class="fa fa-plus"></i> Add New</button>
                </div>
                <br>
                <table id="order-listing" class="table table-responsive" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No #</th>
                            <th>Action</th>
                            <th>Show Virtual Detail</th>
                            <th>Name Server</th>
                            <th>Server IP</th>
                            <th>TYPE OS</th>
                            <th>CPU</th>
                            <th>RAM</th>
                            <th>STORAGE</th>
                            <th>RACK</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(() => {
            var tbl_data_stock = $('#order-listing').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url': '<?= site_url('mst/c_server/read') ?>',
                    'type': 'POST'
                },
                oLanguage: {
                    sProcessing: '<div class=\"bar-loader\"><span></span><span></span><span></span><span></span></div>Fetching data from the server...'
                },
                'columns': [{
                        data: 'server_name',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: null,
                        sortable: false,
                        render: function(data, type, full) {
                            return `
						<a class="btn btn-sm btn-primary px-2 py-1" href="<?= site_url("mst/c_server/formServer?action=edit&id=`+data.server_id+`") ?>">
	                    <i class="fa fa-pencil mr-0"></i> </a>
	                	<a class="btn btn-sm btn-danger px-2 py-1" id="delete_data" onclick="delete_data('server', '` + data.server_id + `')"
	                    href="#"> <i class="fa fa-trash-o mr-0"></i> </a>
					`;
                        }
                    },
                    {
                        "className": 'details-control',
                        "orderable": false,
                        "data": null,
                        "defaultContent": ''
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

                ]
            });
            $('#order-listing tbody').on('click', 'td.details-control', function() {


                var tr = $(this).closest('tr');
                var td = $(this).closest('td');
                var row = tbl_data_stock.row(tr);

                if (row.child.isShown()) {
                    row.child.hide();
                    tr.removeClass('shown');
                    tr.removeClass('selected');

                } else {
                    console.log('test1')
                    detilOuter(row.child, row.data());
                    tr.addClass('shown');
                    tr.addClass('selected');

                }

            });

            function detilOuter(callback, data) {


                $.ajax({
                    url: "<?= site_url('mst/c_virtual/detail') ?>",
                    method: "POST",
                    data: {
                        "server": data.server_id
                    },
                    dataType: "JSON",
                    success: function(response) {
                        console.log(response);

                        var thead = '',
                            tbody = '',
                            tfoot = '';

                        // thead table
                        thead += "<thead><tr>";
                        thead += "<th>No</th>";
                        thead += "<th>Virtual Name</th>";
                        thead += "<th>Virtual IP</th>";
                        thead += "<th>Username</th>";
                        thead += "<th>Password</th>";
                        thead += "</tr></thead>";

                        // load data detil outer box
                        tbody += "<tbody>";
                        $.each(response.aaData, function(i, value) {
                            tbody += '<tr>';
                            tbody += '<td>' + (i + 1) + '</td>';
                            tbody += '<td>' + value.virtual_name + '</td>';
                            tbody += '<td>' + value.virtual_ip + '</td>';
                            tbody += '<td>' + value.virtual_username + '</td>';
                            tbody += '<td>' + value.virtual_password + '</td>';
                            tbody += '</tr>';

                        });


                        callback($('</div><table class="display" id="tbl_detil_outerbox" width="5%">' + thead + tbody + '</table>')).show();

                    },
                    error: function() {
                        $('#output').html('Bummer: there was an error!');
                    }
                });

            }
        });
    </script>