<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Data Donasi Yang Terkirim
            </h3>

            <div class="card-tools">
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive">
            <table class="table table-head-fixed text-nowrap">
                <tread>
                    <tr>
                        <th>No.</th>
                        <th>Dikirim Ke</th>
                        <th>Nama Bank</th>
                        <th>Atas Nama</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                    </tr>
                </tread>
                <tbody>
                    <?php $no = 1;
                    foreach ($donasi as $key => $value) { ?>
                        <tr>
                            <td>
                                <?= $no++ ?>
                            </td>

                            <td>
                                <?= $value['nama_rek'] ?> |
                                <?= $value['no_rek'] ?> |
                                <?= $value['atas_nama'] ?>
                            </td>

                            <td>
                                <?= $value['nama_bank'] ?>
                            </td>
                            <td>
                                <?= $value['an'] ?>
                            </td>
                            <td class="text-left">Rp.
                                <?= number_format($value['jumlah']) ?>
                            </td>
                            <td>
                                <?= $value['status'] ?>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>