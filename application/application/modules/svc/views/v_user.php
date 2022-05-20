<div class="card">
	<div class="card-body">
		<h4 class="card-title">List User</h4>
		<div class="row">
			<div class="col-12">
				<div>
					<button type="button" onclick="location.href='<?= site_url(); ?>svc/c_user/formUser?action=add';" class="btn btn-sm add-new"><i class="fa fa-plus"></i> Add New</button>
				</div>
				<br>
				<table id="order-listing" class="table table-responsive" style="width: 100%;">
					<thead>
						<tr>
							<th>No #</th>
							<th>Action</th>
							<th>Role</th>
							<th>Company</th>
							<th>FullName</th>
							<th>User Name</th>
							<th>User Email</th>
							<th>User Phone</th>
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
					'url': '<?= site_url('svc/c_user/read') ?>',
					'type': 'POST'
				},
				'columns': [{
						data: 'n_user',
						render: function(data, type, row, meta) {
							return meta.row + meta.settings._iDisplayStart + 1;
						}
					},
					{
						data: null,
						sortable: false,
						render: function(data, type, full) {
							return `
						<a class="btn btn-sm btn-primary px-2 py-1" href="<?= site_url("svc/c_user/formUser?action=edit&id=`+data.n_user+`") ?>">
	                    <i class="fa fa-pencil mr-0"></i> </a>
	                	<a class="btn btn-sm btn-danger px-2 py-1" id="delete_data" onclick="delete_data('user', '` + data.n_user + `')"
	                    href="#"> <i class="fa fa-trash-o mr-0"></i> </a>
					`;
						}
					},
					{
						data: 'n_role'
					},
					{
						data: 'company_name'
					},
					{
						data: 'n_name'
					},
					{
						data: 'n_user'
					},
					{
						data: 'n_mail'
					},
					{
						data: 'n_phone'
					},
					{
						data: 'd_entry'
					},
					{
						data: 'e_entry'
					},
				]
			});
		});
	</script>