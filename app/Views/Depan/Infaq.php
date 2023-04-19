<div class="col-md-5">
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Infaq Ke Rekening Di Bawah Ini</h3>
    </div>
    <div class="card-body">
      <table class='table' id="example1">
        <tread>
          <tr>
            <th width='50px'>No</th>
            <th>Rekening</th>
          </tr>
        </tread>
        <tbody>
          <?php $no = 1;
          foreach ($rek as $key => $value) { ?>
            <tr>
              <td>
                <?= $no++ ?>
              </td>
              <td><b><i class='fas fa-credit-card text-success'></i> Bank
                  <?= $value['nama_rek'] ?><br>
                </b>
                No. Rek :
                <?= $value['no_rek'] ?><br>
                a.n :
                <?= $value['atas_nama'] ?>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="col-md-7">
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Infaq</h3>
    </div>
    <div class="card-body">
      <?php
      if (session()->getFlashdata('pesan')) {
        echo '<div class="alert alert-success">';
        echo session()->getFlashdata('pesan');
        echo '</div>';
      }
      ?>
      <table class='table' id="example1">
        <div class="modal-body">
          <?php echo form_open_multipart("Home/InsertDataDonasi") ?>
          <div class='form-group'>
            <label>Tujuan</label>
            <select name="id_rek" class="form-control">
              <?php foreach ($rek as $key => $value) { ?>
                <option value="<?= $value['id_rek'] ?>"><?= $value['nama_rek'] ?> | <?= $value['no_rek'] ?> | <?= $value['atas_nama'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class='form-group'>
            <label>Nama Bank</label>
            <select name="nama_bank" class="form-control" required>
              <option>BRI</option>
              <option>BCA</option>
              <option>BTN</option>
              <option>Lainnya</option>
            </select>
          </div>
          <div class='form-group'>
            <label>No Rekening</label>
            <input type='number' name="no_rekening" class="form-control" placeholder="123412341234" required></input>
          </div>
          <div class='form-group'>
            <label>Atas Nama</label>
            <input type='char' name="an" class="form-control" placeholder="Ruham" required></input>
          </div>
          <div class='form-group'>
            <label>Jumlah</label>
            <input type='number' name="jumlah" class="form-control" placeholder="Rp. " required></input>
          </div>
          <!-- <div class='form-group'>
            <label>Bukti</label>
            <input type='file' id="bukti" name="bukti" class="form-control" required></input>
          </div> -->
          <div class="form-group">
            <label for="bukti">Bukti</label>
            <div class="bukti">
              <div class="custom-file">
                <input type="file" name="bukti" class="custom-file-input" id="bukti" required>
                <label class="custom-file-label" for="bukti">Pilih Gambar</label>
              </div>
            </div><br>
            <button type="submit" class="btn btn-success text-left">Kirim</button>
          </div>
          <div><br></div>
          <?php echo form_close() ?>
      </table>
    </div>
  </div>
</div>