<div class="col-md-12">
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Data
        <?= $judul ?>
      </h3>

      <div class="card-tools">
      </div>

      <!-- /.card-tools -->
    </div>


    <!-- /.card-header -->
    <div class="card-body table-responsive">
      <div class="input-group">
        <input type="text" id="myInput" class="form-control" placeholder="Search...">
        <div class="input-group-append">
          <button class="btn btn-success" type="button"><i class="fas fa-search"></i></button>
        </div>
      </div>
      <br>

      <table class="table table-head-fixed text-nowrap" id="myTable">
        <tread>
          <tr>
            <th width='50px'>No.</th>
            <th>Dikirim Ke</th>
            <th>Nama Bank</th>
            <th>No Rekening</th>
            <th>Atas Nama</th>
            <th>Jumlah</th>
            <th>Bukti</th>
            <th>Status</th>
            <th>Action</th>
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
                <?= $value['no_rekening'] ?>
              </td>
              <td>
                <?= $value['an'] ?>
              </td>
              <td class="text-left">Rp.
                <?= number_format($value['jumlah']) ?>
              </td>
              <td><img src="<?= base_url('bukti/' . $value['bukti']) ?>" width="200px"></td>
              <td>
                <?= $value['status'] ?>
              </td>
              <td>
                <button class="btn btn-flat btn-sm btn-warning" data-toggle="modal"
                  data-target="#modal-edit<?= $value['id_donasi'] ?>"><i class="fas fa-pencil-alt"></i></button>
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

<?php foreach ($donasi as $key => $value) { ?>
  <div class="modal fade" id="modal-edit<?= $value['id_donasi'] ?>">
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
          <?php echo form_open('Admin/UpdateData/' . $value['id_donasi']) ?>
          <div class='form-group'>
            <div class='form-group'>
              <label>Bukti</label><br>
              <img src="<?= base_url('bukti/' . $value['bukti']) ?>" width="450px">
            </div>
            <label>Status</label>
            <select name="status" class="form-control" required>
              <option>Pending</option>
              <option>Keluar</option>
              <option>Masuk</option>
            </select>
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