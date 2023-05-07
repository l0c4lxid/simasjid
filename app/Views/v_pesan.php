<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h1 class="card-title"><i class="fas fa-envelope-open-text "></i> Data
                <?= $judul ?>
            </h1>
            <div class="d-flex">
                <div class="ml-auto">
                    <input type="text" id="myInput" class="form-control" placeholder="Search...">
                </div>
                <button class="btn btn-success" type="button"><i class="fas fa-search"></i></button>
            </div>
            <!-- /.card-tools -->
        </div>


        <!-- /.card-header -->
        <div class="card-body table-responsive table table-bordered">
            <table id="myTable" class="table table-head-fixed text-nowrap">
                <!-- <table class="table table-bordered" id="example2"> -->
                <tread>
                    <tr>
                        <th width='50px'>No</th>
                        <th>Nama Pengirim</th>
                        <th>No. WhatsApp</th>
                        <th>Judul</th>
                        <th>Isi Pesan</th>
                        <th>Waktu Dikirim</th>
                        <th class='text-center'>Action</th>
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
                            <td>
                                <?= $value['tanggal_kirim'] ?>
                            </td>
                            <td class='text-center'>
                                <button class="btn btn-flat btn-sm btn-danger" data-toggle="modal"
                                    data-target="#modal-hapus<?= $value['id_pesan'] ?>"><i
                                        class="fas fa-trash"></i></button>
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
<?php foreach ($pesan as $key => $value) { ?>
    <div class="modal fade" id="modal-hapus<?= $value['id_pesan'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus
                        <?= $value['nama_pesan'] ?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Ingin Hapus Pesan dari
                    <b>
                        <?= $value['nama_pesan'] ?>
                    </b> ?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <a href="<?= base_url('Admin/HapusDataPesan/' . $value['id_pesan']) ?>" class="btn btn-danger">Hapus</a>
                </div>
                <?php echo form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
<?php } ?>
<script>
    $(document).ready(function () {
        $('#myInput').on('keyup', function () {
            var value = $(this).val().toLowerCase();
            $('#myTable tbody tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>