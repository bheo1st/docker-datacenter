<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ASSET MANAGEMENT SERVER</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/vendors/iconfonts/puse-icons-feather/feather.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/shared/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url();?>assets/images/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?= base_url();?>assets/package/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
      function doInit(){
    		var credentialKey = $('#credentialKey').val();
    		var urlServer = $('#urlServer').val();
    		 $.ajax(
            {
              type:"post",
              url: "<?php echo site_url('c_login/do_init'); ?>",
              data:{ credentialKey:credentialKey, urlServer:urlServer},
              dataType: 'json',
              success:function(data, response)
              {
        		if (data)
        		{
                  swal({
                    title: 'Success !',
                    text: 'Init successfull.',
                    icon: 'success'
                  }).then( () => {
                    window.location.href = "<?= site_url(); ?>";                           

                  });
        					
        		} else {
                  swal("Oops...", "Invalid license code.", "error");        					
        		}  
              },
            }
        );
    	}

      $(() => {
        $('#form-init').on('submit', e => {
          e.preventDefault();
          doInit();
        });
      });  	
    </script>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form action="#" id="form-init">
                  <div class="form-group">
                    <label class="label">URL Server Public</label>
                      <input type="text" class="form-control" id="urlServer" placeholder="Input URL Server Public" required>
                  </div>
                  <div class="form-group">
                    <label class="label">Credential Key</label>
                      <input type="text" class="form-control" id="credentialKey" placeholder="Input Credential Key" required>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Submit</button>
                  </div>
                </form>
              </div>
              <p class="footer-text text-center">Copyright © <?= $this->config->item('copyright_year');?> <?= $this->config->item('copyright');?></p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url();?>assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?= base_url();?>assets/js/shared/off-canvas.js"></script>
    <script src="<?= base_url();?>assets/js/shared/hoverable-collapse.js"></script>
    <script src="<?= base_url();?>assets/js/shared/misc.js"></script>
    <script src="<?= base_url();?>assets/js/shared/settings.js"></script>
    <script src="<?= base_url();?>assets/js/shared/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>