<!DOCTYPE html>
<html lang="en">

  <?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
  ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peminjaman Ruangan</title>

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte3.2/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte3.2/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte3.2/plugins/fontawesome/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte3.2/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte3.2/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte3.2/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte3.2/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte3.2/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte3.2/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte3.2/plugins/summernote/summernote-bs4.min.css">

  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>assets/adminlte3.2/dist/img/AdminLTELogo.png">

  <style type="text/css">
  span.input-group-text :hover {
        cursor: pointer;
      }
    .modal {
      text-align: center;
      padding: 0!important;
    }

    .hiddenField{
      display: none;
    }

    .modal:before {
      content: '';
      display: inline-block;
      height: 100%;
      vertical-align: middle;
      margin-right: -4px;
    }

    .modal-dialog {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
    }
  </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url() ?>assets/adminlte3.2/dist/img/politeknikastra_type-1.png" alt="Logo Politeknik Astra" width="20%">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
<!--       <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('Functions/Dashboard'); ?>" class="brand-link">
      <img src="<?php echo base_url() ?>assets/adminlte3.2/dist/img/politeknikastra_type-1.png" alt="Logo Politeknik Astra" class="brand-image ml-5"><br>
      <center><span class="brand-text font-weight-thin">Peminjaman Ruangan</span></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="<?php echo site_url('Functions/Dashboard'); ?>" class="nav-link <?= ($activePage == 'Dashboard') ? 'active':''; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item
            <?= ($activePage == 'Data') ? 'menu-open':''; ?> 
            <?= ($activePage == 'Admin') ? 'menu-open':''; ?> 
            <?= ($activePage == 'Barang') ? 'menu-open':''; ?>
            <?= ($activePage == 'JenisRuangan') ? 'menu-open':''; ?>
            <?= ($activePage == 'Ruangan') ? 'menu-open':''; ?>
            <?= ($activePage == 'SOP') ? 'menu-open':''; ?>">

            <a href="#" class="nav-link 
            <?= ($activePage == 'Data') ? 'active':''; ?> 
            <?= ($activePage == 'Admin') ? 'active':''; ?> 
            <?= ($activePage == 'Barang') ? 'active':''; ?>
            <?= ($activePage == 'JenisRuangan') ? 'active':''; ?>
            <?= ($activePage == 'Ruangan') ? 'active':''; ?>
            <?= ($activePage == 'SOP') ? 'active':''; ?>">

              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('Functions/Admin'); ?>" class="nav-link <?= ($activePage == 'Admin') ? 'active':''; ?>">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Admin
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo site_url('Functions/Barang'); ?>" class="nav-link <?= ($activePage == 'Barang') ? 'active':''; ?>">
                  <i class="nav-icon fas fa-box"></i>
                  <p>
                    Barang
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo site_url('Functions/JenisRuangan'); ?>" class="nav-link <?= ($activePage == 'JenisRuangan') ? 'active':''; ?>">
                  <i class="nav-icon fas fa-key"></i>
                  <p>
                    Jenis Ruangan
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo site_url('Functions/Ruangan'); ?>" class="nav-link <?= ($activePage == 'Ruangan') ? 'active':''; ?>">
                  <i class="nav-icon fas fa-person-booth"></i>
                  <p>
                    Ruangan
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo site_url('Functions/SOP'); ?>" class="nav-link <?= ($activePage == 'SOP') ? 'active':''; ?>">
                  <i class="nav-icon fas fa-scroll"></i>
                  <p>
                    SOP
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>




  <?php echo $data;?>


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    ‎
    
    <div class="float-right d-none d-sm-inline-block">
      Designed By <a target="_blank" href="https://www.polman.astra.ac.id/"> Politeknik Astra</a> MI 19
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/jqvmap/jquery.vmap.min.js"></script>

<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/moment/moment.min.js"></script>

<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/adminlte3.2/dist/js/adminlte.js"></script>

<script src="<?php echo base_url() ?>assets/adminlte3.2/dist/js/pages/dashboard.js"></script> 

<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/datatables-bs4/js/jquery.dataTables.min.js"></script> 

<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> 

<script src="<?php echo base_url() ?>assets/adminlte3.2/plugins/fontawesome/js/fontawesome.js"></script> 

<?php echo $script;?>

</body>
</html>