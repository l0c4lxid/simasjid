<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI MASJID |
    <?= $judul ?>
  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('Adminlte') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('Adminlte') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet"
    href="<?= base_url('Adminlte') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('Adminlte') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('Adminlte') ?>/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url('Adminlte') ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('Adminlte') ?>/dist/css/adminlte.min.css">
  <!-- jQuery -->
  <script src="<?= base_url('Adminlte') ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('Adminlte') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables  & Plugins -->
  <script src="<?= base_url('Adminlte') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('Adminlte') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('Adminlte') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url('Adminlte') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url('Adminlte') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url('Adminlte') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url('Adminlte') ?>/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url('Adminlte') ?>/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url('Adminlte') ?>/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url('Adminlte') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url('Adminlte') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url('Adminlte') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- Select2 -->
  <script src="<?= base_url('Adminlte') ?>/plugins/select2/js/select2.full.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('Adminlte') ?>/dist/js/adminlte.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
  <?php
  $db = \Config\Database::connect();
  $web = $db->table('tbl_pengaturan')->get()->getRowArray();
  ?>
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link"><b>
              <?= $web['nama_masjid'] ?>
            </b></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->


        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#modal-logout">
            <i class="fas fa-sign-out-alt"></i>Log Out
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-green elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url('Admin') ?>" class="brand-link text-center">
        <i class="fas fa-mosque text-success fa-2x"></i>
        <br><b>Masjid</b>
      </a>


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?= base_url("Admin") ?>" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Agenda') ?>" class="nav-link <?= $menu == 'agenda' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  Agenda Kegiatan
                </p>
              </a>
            </li>
            <li class="nav-item <?= $menu == 'kas-masjid' ? 'active' : '' ?>">
              <a href="#" class="nav-link <?= $menu == 'kas-masjid' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-money-bill-wave"></i>
                <p>
                  Uang Kas Masjid
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('KasMasjid') ?>"
                    class="nav-link <?= $submenu == 'rekap-kas' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-primary"></i>
                    <p>Rekap Kas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('KasMasjid/Masuk') ?>"
                    class="nav-link <?= $menu == 'kas-masuk' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-success"></i>
                    <p>Kas Masuk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('KasMasjid/Keluar') ?>"
                    class="nav-link <?= $menu == 'kas-keluar' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Kas Keluar</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('KasMasjid/Laporan') ?>" class="nav-link <?= $menu == 'laporan' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-print"></i>
                <p>
                  Print Laporan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Rekening') ?>" class="nav-link <?= $menu == 'rekening' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-credit-card"></i>
                <p>
                  Rekening
                </p>
              </a>
            </li>
            <li class="nav-item <?= $menu == 'infaq' ? 'active' : '' ?>">
              <a href="#" class="nav-link <?= $menu == 'infaq' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-donate"></i>
                <p>
                  Infaq
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('Admin/Infaq') ?>"
                    class="nav-link <?= $submenu == 'rekap-infaq' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-primary"></i>
                    <p>Rekap Infaq</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Admin/InfaqMasuk') ?>"
                    class="nav-link <?= $menu == 'infaq-masuk' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-success"></i>
                    <p>Infaq Masuk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Admin/InfaqKeluar') ?>"
                    class="nav-link <?= $menu == 'infaq-keluar' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Infaq Keluar</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Admin/PesanMasuk') ?>"
                class="nav-link <?= $menu == 'Pesan Masuk' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-envelope-open-text"></i>
                <p>
                  Pesan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Admin/Pengaturan') ?>"
                class="nav-link <?= $menu == 'pengaturan' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Pengaturan
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">
                <?= $judul ?>
              </h1>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
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

    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        All rights reserved.
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2023 <a href="<?= base_url() ?>"><?= $web['nama_masjid'] ?></a>.</strong>
      <?= $web['alamat'] ?>
    </footer>
  </div>
</body>

</html>
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<div class="modal fade" id="modal-logout">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Log Out
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Ingin Keluar ?<br>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <a href="<?= base_url('Login/LogOut') ?>" class="btn btn-danger">Keluar</a>
      </div>
      <?php echo form_close() ?>
    </div>
    <!-- /.modal-content -->
  </div>
</div>