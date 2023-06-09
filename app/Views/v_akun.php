<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">
                <?= $judul ?>
            </h3>
        </div>
        <div class="card-body">

            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }
            echo form_open('Admin/GantiAkun') ?>

            <div form-group>
                <label>Email <br></label>
                <div></div>
                <input type="email" name="email" value="<?= $email ?>" class="form-control"
                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
            </div>
            <div form-group>
                <label>Password <br></label>
                <div></div>
                <input type="password" name="password" value="<?= $password ?>" class="form-control"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}"
                    title="Password harus terdiri dari setidaknya 8 karakter, dengan setidaknya satu huruf besar, satu huruf kecil, satu angka, dan satu karakter khusus (!@#$%^&*)"
                    required>
            </div><br>
            <button class="btn btn-success">Simpan</button>
            <?php echo form_close() ?>
        </div>
    </div>
</div>