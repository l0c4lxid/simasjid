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
<?php
if ($jumlah_masuk == null) {
  $jumlah_masuk[] = 0;
} else {
  $jumlah_masuk['jumlah'];
}
?>

<?php
if ($jumlah_keluar == null) {
  $jumlah_keluar[] = 0;
} else {
  $jumlah_keluar['jumlah'];
}
?>
<div class="col-12">
  <!-- small box -->
  <div class="small-box bg-primary">
    <div class="inner">
      <h3>Rp.
        <?= number_format($saldoakhir, 0) ?>
      </h3>
      <p>Total Uang Kas</p>
    </div>
    <div class="icon">
      <i class="fas fa-money-bill-wave"></i>
    </div>
    <a href="<?= base_url("KasMasjid/") ?>" class="small-box-footer">More info <i
        class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-6 col-12">
  <!-- small box -->
  <div class="small-box bg-success">
    <div class="inner">
      <h3>Rp.
        <?= number_format(array_sum($pemasukan), 0) ?>
      </h3>

      <p>Kas Masuk</p>
    </div>
    <div class="icon">
      <i class="fas fa-download"></i>
    </div>
    <a href="<?= base_url("KasMasjid/Masuk") ?>" class="small-box-footer">More info <i
        class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-6 col-12">
  <!-- small box -->
  <div class="small-box bg-danger">
    <div class="inner">
      <h3>Rp.
        <?= number_format(array_sum($pengeluaran), 0) ?>
      </h3>

      <p>Kas Keluar</p>
    </div>
    <div class="icon">
      <i class="fas fa-upload"></i>
    </div>
    <a href="<?= base_url("KasMasjid/Keluar") ?>" class="small-box-footer">More info <i
        class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->

<div class="col-lg-6 col-12">
  <!-- small box -->
  <div class="small-box bg-secondary">
    <div class="inner">
      <h3>Rp.
        <?= number_format(array_sum($jumlah_masuk), 0) ?>
      </h3>

      <p>Infaq Masuk</p>
    </div>
    <div class="icon">
      <i class="fas fa-download"></i>
    </div>
    <a href="<?= base_url("Admin/InfaqMasuk") ?>" class="small-box-footer">More info <i
        class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-6 col-12">
  <!-- small box -->
  <div class="small-box bg-warning">
    <div class="inner">
      <h3>Rp.
        <?= number_format(array_sum($jumlah_keluar), 0) ?>
      </h3>

      <p>Infaq Keluar</p>
    </div>
    <div class="icon">
      <i class="fas fa-upload"></i>
    </div>
    <a href="<?= base_url("Admin/InfaqKeluar") ?>" class="small-box-footer">More info <i
        class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->