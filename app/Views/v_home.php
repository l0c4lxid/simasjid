<?php
if ($kas == null) {
  $pemasukan = [0];
  $pengeluaran = [0];
  $saldoakhir = 0;
} else {
  $pemasukan = [];
  $pengeluaran = [];
  foreach ($kas as $key => $value) {
    $pemasukan[] = $value['kas_masuk'];
    $pengeluaran[] = $value['kas_keluar'];
  }
  $saldoakhir = array_sum($pemasukan) - array_sum($pengeluaran);
}
?>
<div class='col-lg-8'>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://i.imgur.com/9UMZpxI.jpeg" width="520" height="420" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://i.imgur.com/6nVjYrF.jpg" width="520" height="420" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://i.imgur.com/cvTcsT1.jpg" width="520" height="420" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><br>
</div>

<div class="col-lg-4 ">
  <div class="card card-outline card-success ">
    <div class="card-header">
      <h2 class="card-title text-success"><b>
          <?= $waktu['data']['lokasi'] ?>
        </b></h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-1">
      <ul class="products-list product-list-in-card pl-2 pr-2">
        <li class="item">
          <div class="product-img">
            <i class="far fa-clock fa-3x text-success"></i>
          </div>
          <div class="product-info">
            <a class="product-title">Subuh</a>
            <span class="product-description">
              <?= $waktu['data']['jadwal']['subuh'] ?>
            </span>
          </div>
        </li>
        <li class="item">
          <div class="product-img">
            <i class="far fa-clock fa-3x text-success"></i>
          </div>
          <div class="product-info">
            <a class="product-title">Dzuhur</a>
            <span class="product-description">
              <?= $waktu['data']['jadwal']['dzuhur'] ?>
            </span>
          </div>
        </li>
        <li class="item">
          <div class="product-img">
            <i class="far fa-clock fa-3x text-success"></i>
          </div>
          <div class="product-info">
            <a class="product-title">Ashar</a>
            <span class="product-description">
              <?= $waktu['data']['jadwal']['ashar'] ?>
            </span>
          </div>
        </li>
        <li class="item">
          <div class="product-img">
            <i class="far fa-clock fa-3x text-success"></i>
          </div>
          <div class="product-info">
            <a class="product-title">Maghrib</a>
            <span class="product-description">
              <?= $waktu['data']['jadwal']['maghrib'] ?>
            </span>
          </div>
        </li>
        <li class="item">
          <div class="product-img">
            <i class="far fa-clock fa-3x text-success"></i>
          </div>
          <div class="product-info">
            <a class="product-title">Isya</a>
            <span class="product-description">
              <?= $waktu['data']['jadwal']['isya'] ?>
            </span>
          </div>
        </li>
        <div class='text-center'>
          <b class='text-success'>
            <?= $waktu['data']['jadwal']['tanggal'] ?>
          </b>
        </div>
      </ul>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

<div class='col-lg-12'>
  <div class="row">
    <div class="col-md-4">
      <div class="info-box">
        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-money-bill-wave"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Sisa Kas</span>
          <span class="info-box-number">
            Rp.
            <?= number_format($saldoakhir, 0) ?>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-4">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-money-bill-wave"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Kas Masuk</span>
          <span class="info-box-number">Rp.
            <?= number_format(array_sum($pemasukan), 0) ?>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-md-4">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-money-bill-wave"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Kas Keluar</span>
          <span class="info-box-number">Rp.
            <?= number_format(array_sum($pengeluaran), 0) ?>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$db = \Config\Database::connect();
$web = $db->table('tbl_pengaturan')->get()->getRowArray();
?>
<div class="col-md-7"><!-- About Me Box -->
  <div class="card card-success card-outline">
    <div class="card-header ">
      <h3 class="card-title text-center"><b>About Masjid
          <?= $web['nama_masjid'] ?>
        </b>
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <strong><i class="fas fa-book mr-1"></i> Masjid
        <?= $web['nama_masjid'] ?>
      </strong>

      <p class="text-muted">
      <p>Masjid Karomah Karet Pleret adalah sebuah masjid yang terletak di Desa Pleret, Kecamatan Pleret,
        Kabupaten Bantul, Yogyakarta, Indonesia. Masjid ini merupakan salah satu masjid yang cukup terkenal di
        daerah tersebut. Masjid Karomah Karet Pleret memiliki arsitektur yang unik, dengan atap yang terbuat
        dari genteng keramik
        merah dan bentuk bangunan yang memanjang ke arah utara-selatan. Masjid ini memiliki satu lantai dan area
        utama masjid yang cukup luas, serta fasilitas seperti tempat wudhu dan kamar mandi yang cukup bersih dan
        terawat.</p>
      <p>
        Masjid Karomah Karet Pleret juga memiliki nilai sejarah yang penting bagi masyarakat sekitar. Konon,
        masjid ini dibangun oleh seorang wali atau tokoh agama pada masa lampau yang memiliki karomah atau
        keistimewaan khusus. Oleh karena itu, masjid ini dinamakan Masjid Karomah Karet Pleret. Masjid ini juga
        menjadi tempat beribadah dan berkumpulnya jamaah muslim setempat untuk melaksanakan
        kegiatan keagamaan seperti shalat berjamaah, kajian Islam, dan acara-acara keagamaan lainnya.</p>
      </p>




      <!-- <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

            <p class="text-muted">
                <span class="tag tag-danger">UI Design</span>
                <span class="tag tag-success">Coding</span>
                <span class="tag tag-info">Javascript</span>
                <span class="tag tag-warning">PHP</span>
                <span class="tag tag-primary">Node.js</span>
            </p>

            <hr> -->

      <!-- <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
            </p> -->
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

<div class="col-md-5"><!-- About Me Box -->
  <div class="card card-success card-outline">
    <div class="card-header ">
      <h3 class="card-title text-center"><b>About Masjid
          <?= $web['nama_masjid'] ?>
        </b>
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <strong><i class="fas fa-phone mr-1"></i> Nomor WhatsApp</strong>

      <p class="text-muted">
        +
        <?= $web['wa_masjid'] ?>
      </p>

      <hr>
      <p>
        <strong><i class="fas fa-envelope mr-1"></i>Email</strong>
      <p class="text-muted">
        <?= $web['email'] ?>
      </p>
      </p>
      <hr>
      <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

      <p class="text-muted">
        <?= $web['alamat'] ?>
      </p>

      <!-- <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

            <p class="text-muted">
                <span class="tag tag-danger">UI Design</span>
                <span class="tag tag-success">Coding</span>
                <span class="tag tag-info">Javascript</span>
                <span class="tag tag-warning">PHP</span>
                <span class="tag tag-primary">Node.js</span>
            </p>

            <hr> -->

      <!-- <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
            </p> -->
    </div>
  </div>
  <!-- /.card-body -->
</div>