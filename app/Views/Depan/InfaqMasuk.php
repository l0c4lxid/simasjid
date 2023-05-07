<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Data Infaq Yang Terkirim
                <?= date('M Y') ?>
            </h3>
            <div class="card-tools">
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover text-nowrap">
                <tread>
                    <tr>
                        <th class='text-center'>No.</th>
                        <th class='text-center'>Dikirim Ke</th>
                        <th class='text-center'>Nama Bank</th>
                        <th class='text-center'>Atas Nama</th>
                        <th class='text-center'>Jumlah</th>
                        <th class='text-center'>Tanggal</th>
                        <th class='text-center'>Waktu</th>
                        <th class='text-center'>Status</th>
                    </tr>
                </tread>
                <tbody>
                    <?php $no = 1;
                    foreach ($donasi as $key => $value) { ?>
                        <tr>
                            <td class='text-center'>
                                <?= $no++ ?>
                            </td>

                            <td class=''>
                                <?= $value['nama_rek'] ?> |
                                <?= $value['no_rek'] ?> |
                                <?= $value['atas_nama'] ?>
                            </td>

                            <td class='text-center'>
                                <?= $value['nama_bank'] ?>
                            </td>
                            <td class='text-center'>
                                <?= $value['an'] ?>
                            </td>
                            <td class="text-right">Rp.
                                <?= number_format($value['jumlah']) ?>
                            </td>
                            <td class="text-center">
                                <?php echo date('Y-m-d', strtotime($value['tanggal'])); ?>
                            </td>
                            <td class="text-center">
                                <?php echo date('H:i:s', strtotime($value['tanggal'])); ?>
                            </td>
                            <td class='text-center'>
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