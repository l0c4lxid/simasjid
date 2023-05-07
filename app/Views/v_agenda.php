<div class="col-md-12">
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Data
        <?= $judul ?>
      </h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modal-tambah"><i
            class="fas fa-plus"></i> Tambah
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
      <?php
      if (session()->getFlashdata('pesan')) {
        echo '<div class="alert alert-success">';
        echo session()->getFlashdata('pesan');
        echo '</div>';
      }
      ?>
      <div class="input-group">
        <input type="text" id="myInput" class="form-control" placeholder="Search...">
        <div class="input-group-append">
          <button class="btn btn-success" type="button"><i class="fas fa-search"></i></button>
        </div>
      </div>
      <br>

      <table id="myTable" class="table table-head-fixed text-nowrap">
        <!-- <table class="table" id="example2"> -->
        <tread>
          <tr>
            <th class='text-center' width='50px'>No</th>
            <th>Nama Kegiatan</th>
            <th class='text-center'>Action</th>
          </tr>
        </tread>
        <tbody>
          <?php $no = 1;
          foreach ($agenda as $key => $value) { ?>
            <tr>
              <td class='text-center'>
                <?= $no++ ?>
              </td>
              <td>
                <p>
                  <b>
                    <?= $value['nama_kegiatan'] ?>
                  </b><br>
                  Tanggal :
                  <?= $value['tanggal'] ?><br>
                  Waktu :
                  <?= $value['jam'] ?> - Selesai
                </p>
              </td>
              <td class='text-center'>
                <button class="btn btn-flat btn-sm btn-warning" data-toggle="modal"
                  data-target="#modal-edit<?= $value['id_agenda'] ?>"><i class="fas fa-pencil-alt"></i></button>
                <button class="btn btn-flat btn-sm btn-danger" data-toggle="modal"
                  data-target="#modal-hapus<?= $value['id_agenda'] ?>"><i class="fas fa-trash"></i></button>
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


<div class="modal fade" id="modal-tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah
          <?= $judul ?>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open('Agenda/InsertData') ?>
        <div class='form-group'>
          <label>Nama Kegiatan</label>
          <textarea rows="4" name="nama_kegiatan" class="form-control" required></textarea>
        </div>
        <div class='form-group'>
          <label>Tanggal</label>
          <input type='date' name="tanggal" class="form-control" required></input>
        </div>
        <div class='form-group'>
          <label>Jam</label>
          <input type='time' name="jam" class="form-control" required></input>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
      <?php echo form_close() ?>
    </div>
    <!-- /.modal-content -->
  </div>
</div>

<?php foreach ($agenda as $key => $value) { ?>
  <div class="modal fade" id="modal-edit<?= $value['id_agenda'] ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit
            <?= $judul ?>
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo form_open('Agenda/UpdateData/' . $value['id_agenda']) ?>
          <div class='form-group'>
            <label>Nama Kegiatan</label>
            <textarea rows="4" name="nama_kegiatan" class="form-control"><?= $value['nama_kegiatan'] ?></textarea>
          </div>
          <div class='form-group'>
            <label>Tanggal</label>
            <input type='date' name="tanggal" value='<?= $value['tanggal'] ?>' class="form-control"></input>
          </div>
          <div class='form-group'>
            <label>Jam</label>
            <input type='time' name="jam" value='<?= $value['jam'] ?>' class="form-control"></input>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        <?php echo form_close() ?>
      </div>
      <!-- /.modal-content -->
    </div>
  </div>

  <div class="modal fade" id="modal-hapus<?= $value['id_agenda'] ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hapus
            <?= $judul ?>
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Ingin Hapus Data ?<br>
          <b>
            <?= $value['nama_kegiatan'] ?>
          </b>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <a href="<?= base_url('Agenda/HapusData/' . $value['id_agenda']) ?>" class="btn btn-danger">Hapus</a>
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