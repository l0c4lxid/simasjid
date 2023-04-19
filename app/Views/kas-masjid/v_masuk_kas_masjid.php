<div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Data <?= $judul ?></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modal-tambah" ><i class="fas fa-plus"></i>  Tambah
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
              if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success">';
                echo session()->getFlashdata('pesan');
                echo '</div>';}
                ?>
                <table class='table' id="example1">
                    <tread>
                        <tr>
                            <th width='50px'>No</th>
                            <th width='100px'>Tanggal</th>
                            <th>keterangan</th>
                            <th>Jumlah</th>
                            <th width='100px'>Action</th>
                        </tr>
                    </tread>
                    <tbody>
                        <tr>
                        <?php $no=1;
                        foreach ($kas as $key => $value) {?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $value['tanggal']?></td>
                            <td><?= $value['ket']?></td>
                            <td class="text-left">Rp. <?= number_format($value['kas_masuk']) ?></td>
                            <td>
                                <button class="btn btn-flat btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit<?= $value['id_kas_masjid']?>"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-flat btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus<?= $value['id_kas_masjid']?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>

<div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah <?= $judul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('KasMasjid/InsertDataKas')?>
              <div class='form-group'>
                <label>Keterangan</label>
                <textarea rows="4" name="ket" class="form-control" required></textarea>
              </div>
              <div class='form-group'>
                <label>Tanggal</label>
                <input type='date' name="tanggal" class="form-control" required></input>
              </div>
              <div class='form-group'>
                <label>Jumlah</label>
                <input type='number' min="0" name="kas_masuk" class="form-control" required></input>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            <?php echo form_close()?>
          </div>
          <!-- /.modal-content -->
        </div>
        </div>

<?php foreach ($kas as $key => $value) { ?>
        <div class="modal fade" id="modal-edit<?= $value['id_kas_masjid']?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit <?= $judul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('KasMasjid/UpdateDataKas/'. $value['id_kas_masjid'])?>
              <div class='form-group'>
                <label>Keterangan</label>
                <textarea rows="4" name="ket" class="form-control" required><?= $value['ket']?></textarea>
              </div>
              <div class='form-group'>
                <label>Tanggal</label>
                <input type='date' name="tanggal" value='<?= $value['tanggal']?>' class="form-control" required></input>
              </div>
              <div class='form-group'>
                <label>Jumlah</label>
                <input type='number' min="0" name="kas_masuk" value='<?= $value['kas_masuk']?>' class="form-control" required></input>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            <?php echo form_close()?>
          </div>
          <!-- /.modal-content -->
        </div>
        </div>

        <div class="modal fade" id="modal-hapus<?= $value['id_kas_masjid']?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus <?= $judul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah Ingin Hapus Data ?<br>
              <b><?= $value['ket']?></b>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <a href="<?= base_url('KasMasjid/HapusDataKas/'. $value['id_kas_masjid'])?>" class="btn btn-danger">Hapus</a>
            </div>
            <?php echo form_close()?>
          </div>
          <!-- /.modal-content -->
        </div>
        
        </div>
        <?php } ?>