<div class="card">
	<div class="card-body">
	<h4 class="card-title">List Role</h4>
		<div class="row">
			<div class="col-12">
			<div>
                <button type="button" onclick="location.href='<?= site_url(); ?>svc/c_role/formRole?action=add';" class="btn btn-sm add-new"><i class="fa fa-plus"></i> Add New</button>
            </div>
            <br>
			<table id="order-listing" class="table">
				<thead>
					<tr>
						<th width="30px">No #</th>
						<th width="30px">Action</th>
						<th>Role Name</th>
						<th>Level</th>
						<th>Description</th>
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
		        'url':'<?=site_url('svc/c_role/read')?>'
                ,'type' : 'POST'
		    },
		    'columns': [
		        { data: 'c_role',
		        	render : function (data, type, row, meta){
		        		return meta.row + meta.settings._iDisplayStart + 1;
		        	}
		    	},
		        { data: null,
		          sortable: false,
			      render: function(data, type, full) {
			        return `
		               	<a class="btn btn-sm btn-primary px-2 py-1" href="<?= site_url("svc/c_role/formRole?action=edit&id=`+data.c_role+`") ?>">
						<i class="fa fa-pencil mr-0"></i> </a>`;
			      }
		        },
		        { data: 'n_role' },
		        { data: 'n_level' },
		        { data: 'n_desc' }
		    ]
	    });
	});

	
</script>
