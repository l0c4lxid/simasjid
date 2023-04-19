<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI Masjid |
    <?= $judul ?>
  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("Adminlte") ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url("Adminlte") ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("Adminlte") ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-success">
      <div class="card-header text-center">
        <i class="fas fa-mosque fa-3x text-success"></i><br>
        <a href="<?= base_url("Home") ?>" class="h1"><b>SI Masjid</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan Login</p>
        <?php
        if (session()->getFlashdata('pesan')) {
          echo '<div class="alert alert-danger">';
          echo session()->getFlashdata('pesan');
          echo '</div>';
        }
        if (session()->getFlashdata('gagal')) {
          echo '<div class="alert alert-danger">';
          echo session()->getFlashdata('gagal');
          echo '</div>';
        }
        ?>

        <?php echo form_open('Login/CekLogin') ?>
        <p class="text-danger">
          <?= $validation->hasError('email') ? $validation->getError('email') : '' ?>
        </p>
        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

        </div>
        <p class="text-danger">
          <?= $validation->hasError('password') ? $validation->getError('password') : '' ?>
        </p>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-success">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
        <?php echo form_close(); ?>

        <div class="social-auth-links text-center mt-2 mb-3">
        </div>
        <!-- /.social-auth-links -->

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url("Adminlte") ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url("Adminlte") ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url("Adminlte") ?>/dist/js/adminlte.min.js"></script>
</body>

</html>