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
      <?php
      if (session()->getFlashdata('gagal')) {
        echo '<div class="alert alert-danger">';
        echo session()->getFlashdata('gagal');
        echo '</div>';
      }
      ?>
      <table class='table' id="example1">
        <div class="modal-body">
          <?php echo form_open_multipart("Home/InsertDataInfaq") ?>
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
            <select name="nama_rek" class="form-control" required onchange="setAccountNumber(this)">
              <option value="">Pilih Bank</option>
              <option value="BRI">BRI</option>
              <option value="BCA">BCA</option>
              <option value="BTN">BTN</option>
              <option value="BSI">BSI</option>
              <option value="Yang Lain">Yang Lain</option>
            </select>
          </div>
          <div class='form-group'>
            <label>No Rekening</label>
            <input type='text' name="no_rekening" class="form-control" placeholder="123412341234" pattern="\d{10,16}"
              title="Masukkan No Rekening Yang Valid" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
          </div>
          <div class='form-group'>
            <label>Atas Nama</label>
            <input type='char' name="an" class="form-control" placeholder="Andhika" required></input>
          </div>
          <div class='form-group'>
            <label>Jumlah</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">RP.</span>
              </div>
              <input type='number' name="jumlah" class="form-control" placeholder="Jumlah Dalam Digit Angka" required
                oninput="this.value = this.value.replace(/[^0-9]/g, '')"></input>
            </div>
          </div>
          <div class="form-group">
            <label for="bukti">Bukti</label>
            <div class="bukti">
              <div class="custom-file">
                <input type="file" name="bukti" class="custom-file-input" id="bukti" required accept="image/*"
                  onchange="displayFileName()">
                <label class="custom-file-label" for="bukti" id="fileLabel">Pilih Gambar</label>
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
<script>
  function displayFileName() {
    var input = document.getElementById('bukti');
    var label = document.getElementById('fileLabel');
    var fileName = input.files[0].name;
    label.textContent = fileName;
  }
</script>
<!-- <script>
  function validateAccountNumber(input) {
    // Menghapus semua karakter selain angka
    var accountNumber = input.value.replace(/\D/g, '');

    // Memastikan panjang angka dalam rentang 10-16 digit
    if (accountNumber.length < 10 || accountNumber.length > 16) {
      input.setCustomValidity("No Rekening harus terdiri dari 10 hingga 16 digit angka.");
    } else {
      input.setCustomValidity("");
    }
  }
</script> -->
<script>
  function setAccountNumber(select) {
    const accountNumberInput = document.querySelector('input[name="no_rekening"]');
    const selectedBank = select.value;
    let accountNumber = "";

    if (selectedBank === "BRI") {
      accountNumber = "002";
    } else if (selectedBank === "BCA") {
      accountNumber = "014";
      // Add account number for BCA if desired
    } else if (selectedBank === "BTN") {
      accountNumber = "200";
      // Add account number for BTN if desired
    } else if (selectedBank === "BSI") {
      accountNumber = "451";
      // Add account number for BSI if desired
    } else {
      accountNumber = "";
    }
    accountNumberInput.value = accountNumber;
  }
</script>