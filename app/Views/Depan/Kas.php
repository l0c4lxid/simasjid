<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Data
                <?= $judul ?>
            </h3>
        </div>
        <div class="card-body table-responsive">
            <table class='table table table-bordered table-hover text-nowrap'>
                <tread>
                    <tr class="text-center">
                        <th width='50px'>No</th>
                        <th class='text-center' width='200px'>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Kas Masuk</th>
                        <th>Kas Keluar</th>
                    </tr>
                </tread>
                <tbody>
                    <?php $no = 1;
                    foreach ($kas as $key => $value) { ?>
                        <tr class='<?= $value['status'] == 'masuk' && 'Masuk' ? 'text-success' : 'text-danger' ?>'>
                            <td>
                                <?= $no++ ?>
                            </td>
                            <td class='text-center'>
                                <?= $value['tanggal'] ?>
                            </td>
                            <td>
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
                </tbody>
            </table>
        </div>
    </div>
</div>