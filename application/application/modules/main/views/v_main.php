<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $this->config->item('app_name');?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/iconfonts/puse-icons-feather/feather.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/icheck/skins/all.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css_modif/modified.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/shared/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/shared/custom.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/demo_1/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/demo_3/dark-theme.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/demo_1/custom.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/components.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/components.min.css">
    <!-- End Layout styles -->
    <!-- Vendors : start -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/bootstrap-treeview-1.2.0/dist/bootstrap-treeview.min.css">
    <!-- Vendors : end -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.png" />

    <!-- inject javascript -->
    <script src="<?= base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/datatable/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/datatable/buttons.flash.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/datatable/jszip.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/datatable/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/datatable/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/datatable/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/datatable/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/datatable/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/bootstrap-treeview-1.2.0/dist/bootstrap-treeview.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- end javascript -->
</head>

<body class="sidebar-light">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-dark ">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="<?= site_url(); ?>">
                    <img src="<?= base_url(); ?>assets/images/logo.png" style="height:50px;" class="w-auto" alt="logo" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">                
                <ul class="navbar-nav navbar-nav-right">                   
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link border border-light rounded" href="#">
                            <span class="profile-text mx-3">
                                <?= $this->session->userdata('fullname'); ?>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="<?php echo site_url('c_login/do_logout'); ?>">
                            <i class="fa fa-power-off"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile justify-content-center">
                        <div class="nav-link">
                            <div class="user-wrapper mb-0">
                                <div class="text-wrapper ml-0">
                                    <p class="profile-name"><?= $this->session->userdata('fullname'); ?></p>
                                    <div>
                                        <small class="designation text-muted"><?= $this->session->userdata('role_name'); ?></small>
                                        <span class="status-indicator online"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('main'); ?>" style="padding-left: 10px;" class="nav-link">
                            <i class="menu-icon mdi mdi-television"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <!-- show menu and module according to user access -->
                    <?php foreach ($menu as $_menu) { ?>
                        <?php if ($_menu['b_leaf'] === 't') { ?>
                            <li class="nav-item">
                                <a class="nav-link" style="padding-left: 10px; padding-right: 15px; cursor: pointer;" id="<?= $_menu['c_module']; ?><?= $_menu['c_menu']; ?>" data-toggle="collapse" data-target="#<?= $_menu['c_module']; ?><?= $_menu['c_menu']; ?>" aria-controls="<?= $_menu['c_module']; ?><?= $_menu['c_menu']; ?>">
                                    <i class="<?= $_menu['n_icon']; ?>"></i>
                                    <span class="menu-title"><?= $_menu['n_menu']; ?></span>
                                    <i class="menu-arrow"></i>
                                </a>

                                <?php if (count($_menu['child']) > 0) { ?>
                                    <div class="collapse <?php if (in_array($this->uri->segment(1) . '/' . $this->uri->segment(2), $_menu['child'])) {
                                                                            echo 'show';
                                                                        } else {
                                                                            echo '';
                                                                        } ?>" id="<?= $_menu['c_module']; ?><?= $_menu['c_menu']; ?>" onclick="buttonMenu(<?= $_menu['c_module']; ?><?= $_menu['c_menu']; ?>);">
                                        <ul class="nav flex-column sub-menu" style="padding-left: 1.45rem;">
                                            <?php foreach ($_menu['child'] as $child) { ?>

                                                <?php if (count($child['child_dua']) > 0) { ?>
                                                    <li class="nav-item">
                                                        <a class="nav-link" style="padding-left: 1.45rem;" id="<?= $child['c_module']; ?><?= $child['c_menu']; ?>" aria-expanded="false" data-toggle="collapse" href="#<?= $child['c_module']; ?><?= $child['c_menu']; ?>" aria-controls="<?= $child['c_module']; ?><?= $child['c_menu']; ?>">
                                                            <span class="menu-title"><?= $child['n_menu']; ?></span>
                                                            <i class="menu-arrow"></i>
                                                        </a>
                                                        <div class="collapse navbar-collapse <?php $childurl = [];
                                                                                                                    foreach ($child['child_dua'] as $childmenu) {
                                                                                                                        $childurl[] = $childmenu['n_url'];
                                                                                                                    }
                                                                                                                    if (in_array($this->uri->segment(1) . '/' . $this->uri->segment(2), $childurl)) {
                                                                                                                        echo 'show';
                                                                                                                    } else {
                                                                                                                        echo '';
                                                                                                                    } ?>" id="<?= $child['c_module']; ?><?= $child['c_menu']; ?>">
                                                            <ul class="nav flex-column sub-menu" style="padding-left: 1.45rem;">

                                                                <?php foreach ($child['child_dua'] as $child_dua) { ?>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link <?= ($this->uri->segment(1) . '/' . $this->uri->segment(2) === $child_dua['n_url'] ? 'active' : 'false'); ?>" id="<?= $child['c_module']; ?><?= $child_dua['c_menu']; ?>" href="<?= base_url() . $child_dua['n_url']; ?>"><?= $child_dua['n_menu']; ?></a>
                                                                    </li>

                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                <?php } else { ?>
                                                    <li class="nav-item">
                                                        <a class="nav-link" aria-expanded="false" id="<?= $child['c_module']; ?><?= $child['c_menu']; ?>" onclick="buttonMenu(<?= $child['c_module']; ?><?= $child['c_menu']; ?>);" style="padding-left: 1.45rem;" href="<?= base_url() . $child['n_url']; ?>"><?= $child['n_menu']; ?></a>
                                                    </li>
                                                <?php } ?>

                                            <?php } ?>
                                        </ul>
                                    </div>
                                <?php } ?>

                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" aria-expanded="false" id="<?= $_menu['c_module']; ?><?= $_menu['c_menu']; ?>" onclick="buttonMenu(<?= $_menu['c_module']; ?><?= $_menu['c_menu']; ?>);" href="<?= base_url() . $_menu['n_url']; ?>">
                                    <i class="menu-icon mdi <?= $_menu['n_icon']; ?>"></i>
                                    <span class="menu-title"><?= $_menu['n_menu']; ?></span>
                                </a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <?= $content; ?>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?= $this->config->item('copyright_year');?> <?= $this->config->item('copyright');?> </span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="<?= base_url(); ?>assets/js/shared/off-canvas.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/misc.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/settings.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/todolist.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/data-table.js"></script>
    <script src="<?= base_url(); ?>assets/js/demo_1/dashboard.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/typeahead.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/iCheck.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/select2.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/formpickers.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/x-editable.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/dropify.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/dropzone.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/jquery-file-upload.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/form-repeater.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/js-grid.js"></script>
    <script src="<?= base_url(); ?>assets/js/shared/tabs.js"></script>  
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/no-data-to-display.js"></script>
    <script>
        $(() => {
            <?php
            $uri = uri_string();
            $uri = site_url(implode('/', array_slice(explode('/', $uri), 0, 2)));
            ?>

            let uri = '<?= $uri ?>';
            let activeMenu = $('#sidebar').find(`a[href='${uri}']`).first();

            activeMenu.addClass('active');
            activeMenu.parentsUntil('#sidebar', '.collapse').addClass('show');
            activeMenu.parentsUntil('#sidebar', 'li.nav-item')
                .addClass('active')
                .find('a.nav-link')
                .siblings('div.collapse').has(activeMenu).siblings('a.nav-link')
                .addClass('collapse active')
                .attr('aria-expanded', 'true');

            $('[data-toggle="tooltip"]').tooltip();
        });

        function buttonMenu(id) {
            document.getElementById(id[0].id).setAttribute("aria-expanded", "true");
        }
    </script>
    <?php if (isset($js)) echo $js; ?>
</body>

</html>