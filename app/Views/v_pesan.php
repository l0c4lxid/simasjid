<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-envelope-open-text "></i> Data
                <?= $judul ?>
            </h3>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered" id="example2">
                <tread>
                    <tr>
                        <th width='50px'>No</th>
                        <th>Nama Pengirim</th>
                        <th>No. WhatsApp</th>
                        <th>Judul</th>
                        <th>Isi Pesan</th>
                    </tr>
                </tread>
                <tbody>
                    <?php $no = 1;
                    foreach ($pesan as $key => $value) { ?>
                        <tr>
                            <td>
                                <?= $no++ ?>
                            </td>
                            <td>
                                <?= $value['nama_pesan'] ?>
                            </td>
                            <td>
                                <?= $value['wa_pesan'] ?>
                            </td>
                            <td>
                                <?= $value['judul_pesan'] ?>
                            </td>
                            <td>
                                <?= $value['isi_pesan'] ?>
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