<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Masjid |
    <?= $judul ?>
  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('Adminlte') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('Adminlte') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
  <?php
  $db = \Config\Database::connect();
  $web = $db->table('tbl_pengaturan')->get()->getRowArray();
  ?>
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="<?= base_url('') ?>" class="navbar-brand">
          <i class="fas fa-mosque fa-2x text-green"></i> <b>
            <?= $web['nama_masjid'] ?>
          </b>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->

          <!-- Right navbar links -->
          <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="<?= base_url() ?>" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Home/Agenda') ?>" class="nav-link">Agenda</a>
              </li>
              <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                  class="nav-link dropdown-toggle">Rekap Data Masjid</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="<?= base_url('Home/Kas') ?>" class="dropdown-item">Data Rekap Kas </a></li>
                  <li><a href="<?= base_url('Home/InfaqMasuk') ?>" class="dropdown-item">Data Donator</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Home/About') ?>" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Home/Contact') ?>" class="nav-link">Kontak Kami</a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Home/Infaq') ?>" class="btn btn-success">
                  <i class="fas fa-hand-holding-usd"></i> Infaq

                </a>
              </li>
            </ul>
          </ul>
        </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">
                <b>
                  <?= $judul ?>
                </b>
              </h1>
            </div><!-- /.col -->
            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="row">
            <?php
            if ($page) {
              echo view($page);
            }
            ?>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        All rights reserved
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2023 <a href="#">
          <?= $web['nama_masjid'] ?>.</strong>
      <?= $web['alamat'] ?>.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?= base_url('Adminlte') ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('Adminlte') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('Adminlte') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>