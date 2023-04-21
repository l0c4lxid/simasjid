<?php
if ($kas == null) {
    $pemasukan[] = 0;
    $pengeluaran[] = 0;
} else {
    foreach ($kas as $key => $value) {
        $pemasukan[] = $value['kas_masuk'];
        $pengeluaran[] = $value['kas_keluar'];
    }
}
?>
<div class='col-sm-12 text-center' id='printarea'>
    <div class='text-center'>
        <p class='text-center'>
        <h3><b>
                Masjid
                <?= $masjid['nama_masjid'] ?>
            </b></h3>
        </p>
        <p class='text-center'>
            <?= $masjid['alamat'] ?><br>Laporan Kas Masjid
        </p>
    </div>
</div>
<b> Bulan :
    <?= $bulan ?>
</b>
<b> Tahun :
    <?= $tahun ?>
</b>
<div class="table-responsive mx-auto">
    <table class="table table-bordered" border="1px solid">
        <tr class="text-center">
            <th width='50px'>No</th>
            <th width='100px'>Tanggal</th>
            <th width='200px'>Keterangan</th>
            <th width='200px'>Kas Masuk</th>
            <th width='200px'>Kas Keluar</th>
        </tr>
        <?php $no = 1;
        foreach ($kas as $key => $value) { ?>
            <tr class="<?= $value['status'] == 'masuk' ? 'text-success' : 'text-danger' ?>">
                <td class="text-center">
                    <?= $no++ ?>
                </td>
                <td class="text-center">
                    <?= $value['tanggal'] ?>
                </td>
                <td class="text-left">
                    <?= $value['ket'] ?>
                </td>
                <td class="text-right">Rp.
                    <?= number_format($value['kas_masuk']) ?>
                </td>
                <td class="text-right">Rp.
                    <?= number_format($value['kas_keluar']) ?>
                </td>
            </tr>
        <?php } ?>
        <tr>
            <th class='text-center' colspan="3">Total</th>
            <th class="text-success text-right">Rp
                <?= number_format(array_sum($pemasukan), 0) ?>
            </th>
            <th class="text-danger text-right">Rp
                <?= number_format(array_sum($pengeluaran), 0) ?>
            </th>
        </tr>
    </table>
</div>