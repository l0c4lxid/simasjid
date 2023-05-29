<?php
$db = \Config\Database::connect();
$web = $db->table('tbl_pengaturan')->get()->getRowArray();
?>

<div class="col-md-12">
    <!-- Default box -->
    <div class="card">
        <?php
        if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success">';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        }
        ?>
        <div class="card-body row">
            <div class="col-12 col-md-5 text-center">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                    <i class="fas fa-mosque fa-4x text-green"></i>
                    <h2><strong>Masjid
                            <?= $web['nama_masjid'] ?>
                        </strong></h2>
                    <p class="lead mb-5">
                        <?= $web['alamat'] ?>.<br>
                        +
                        <?= $web['wa_masjid'] ?><br>
                        <? +$web['email'] ?>
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <?php echo form_open("Home/InsertDataPesan") ?>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" id="nama" name="nama_pesan" class="form-control" placeholder="Nama Anda"
                        required />
                </div>
                <div class="form-group">
                    <label>Nomor WhatsApp</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+62</span>
                        </div>
                        <input type="text" id="wa_number" name="wa_pesan" class="form-control" placeholder="89607765169"
                            pattern=".{10,}" title="Minimum 10 characters required" maxlength="12" required
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
                    </div>
                </div>


                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" id="judul" name="judul_pesan" class="form-control"
                        placeholder="Donasi Sudah Masuk?" required />
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea id="isipesan" name="isi_pesan" class="form-control" rows="4" placeholder="Isi Pesan"
                        required></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Kirim">
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->