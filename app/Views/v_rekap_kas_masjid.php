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
                <div class="col-md-12">
                <div class="alert alert-primary alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-info"></i> Saldo Kas Masjid</h5>
                  Pemasukan     : Rp. <?= number_format(array_sum($pemasukan), 0)?><br>
                  Pengeluaran   : Rp. <?= number_format(array_sum($pengeluaran), 0)?>
                  <hr>
                  Saldo Akhir   : Rp. <?= number_format($saldoakhir, 0)?>
                </div>
                </div>

<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data <?= $judul ?></h3>
        </div>
    <div class="card-body">
    <table id="example1" class='table' >
                    <tread>
                        <tr class="text-center">
                            <th width='50px'>No</th>
                            <th width='100px'>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Kas Masuk</th>
                            <th>Kas Keluar</th>
                        </tr>
                    </tread>
                    <tbody>
                        <?php $no=1;
                        foreach ($kas as $key => $value) {?>
                        <tr class='<?= $value['status'] == 'masuk' && 'Masuk' ? 'text-success' : 'text-danger' ?>'>
                            <td><?= $no++?></td>
                            <td><?= $value['tanggal']?></td>
                            <td><?= $value['ket']?></td>
                            <td class="text-right">Rp. <?= number_format($value['kas_masuk']) ?></td>
                            <td class="text-right">Rp. <?= number_format($value['kas_keluar']) ?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
    </div>
    </div>
</div>