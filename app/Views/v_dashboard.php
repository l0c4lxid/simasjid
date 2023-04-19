<?php
if ($kas == null) {
$pemasukan[] = 0;
$pengeluaran[] = 0;
} else {
    foreach ($kas as $key => $value) {
        $pemasukan[] = $value['kas_masuk'];
        $pengeluaran[] = $value['kas_keluar'];
    }
    $saldoakhir = array_sum($pemasukan) - array_sum($pengeluaran);
}
?>
<div class="col-12">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>Rp. <?= number_format($saldoakhir, 0)?></h3>

                <p>Uang Kas</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-bill-wave"></i>
              </div>
              <a href="<?= base_url("KasMasjid/")?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Rp. <?= number_format(array_sum($pemasukan), 0)?></h3>

                <p>Kas Masuk</p>
              </div>
              <div class="icon">
              <i class="fas fa-download"></i>
              </div>
              <a href="<?= base_url("KasMasjid/Masuk")?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Rp. <?= number_format(array_sum($pengeluaran), 0)?></h3>

                <p>Kas Keluar</p>
              </div>
              <div class="icon">
              <i class="fas fa-upload"></i>
              </div>
              <a href="<?= base_url("KasMasjid/Keluar")?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->