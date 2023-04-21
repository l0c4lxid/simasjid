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
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
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