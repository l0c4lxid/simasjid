<div class="col-md-12">
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">
        <?= $judul ?>
      </h3>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <?php
      if (session()->getFlashdata('pesan')) {
        echo '<div class="alert alert-success">';
        echo session()->getFlashdata('pesan');
        echo '</div>';
      }
      echo form_open('Admin/UpdatePengaturan') ?>
      <div form-group>
        <label>Nama Masjid <br> </label>
        <input name="nama_masjid" value="<?= $pengaturan['nama_masjid'] ?>" class="form-control" required>
      </div>
      <div form-group>
        <label>Kab/Kota <br></label>
        <select name="id_kota" class="form-control select2">
          <?php foreach ($kota as $key => $kota) { ?>
            <option value="<?= $kota['id'] ?>" <?= $kota['id'] == $pengaturan['id_kota'] ? 'selected' : '' ?>><?= $kota['lokasi'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div form-group>
        <label>Alamat Masjid <br> </label>
        <input name="alamat" value="<?= $pengaturan['alamat'] ?>" class="form-control" required>
      </div>
      <div form-group>
        <label>No. WhatsApp <br></label>
        <input type="number" name="wa_masjid" value="<?= $pengaturan['wa_masjid'] ?>" class="form-control" required>
      </div>
      <div form-group>
        <label>Email <br></label>
        <div></div>
        <input type="email" name="email" value="<?= $pengaturan['email'] ?>" class="form-control" required>
      </div><br>
      <button class="btn btn-success">Simpan</button>
      <?php echo form_close() ?>
    </div>
  </div>
</div>
<script>
  $(function () {
    $('.select2').select2()
  });
</script>