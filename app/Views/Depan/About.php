<?php
$db = \Config\Database::connect();
$web = $db->table('tbl_pengaturan')->get()->getRowArray();
?>
<div class="col-md-7"><!-- About Me Box -->
    <div class="card card-success">
        <div class="card-header ">
            <h3 class="card-title text-center"><b>About Masjid
                    <?= $web['nama_masjid'] ?>
                </b>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Masjid
                <?= $web['nama_masjid'] ?>
            </strong>

            <p class="text-muted">
            <p>Masjid Karomah Karet Pleret adalah sebuah masjid yang terletak di Desa Pleret, Kecamatan Pleret,
                Kabupaten Bantul, Yogyakarta, Indonesia. Masjid ini merupakan salah satu masjid yang cukup terkenal di
                daerah tersebut. Masjid Karomah Karet Pleret memiliki arsitektur yang unik, dengan atap yang terbuat
                dari genteng keramik
                merah dan bentuk bangunan yang memanjang ke arah utara-selatan. Masjid ini memiliki satu lantai dan area
                utama masjid yang cukup luas, serta fasilitas seperti tempat wudhu dan kamar mandi yang cukup bersih dan
                terawat.</p>
            <p>
                Masjid Karomah Karet Pleret juga memiliki nilai sejarah yang penting bagi masyarakat sekitar. Konon,
                masjid ini dibangun oleh seorang wali atau tokoh agama pada masa lampau yang memiliki karomah atau
                keistimewaan khusus. Oleh karena itu, masjid ini dinamakan Masjid Karomah Karet Pleret. Masjid ini juga
                menjadi tempat beribadah dan berkumpulnya jamaah muslim setempat untuk melaksanakan
                kegiatan keagamaan seperti shalat berjamaah, kajian Islam, dan acara-acara keagamaan lainnya.</p>
            </p>




            <!-- <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

            <p class="text-muted">
                <span class="tag tag-danger">UI Design</span>
                <span class="tag tag-success">Coding</span>
                <span class="tag tag-info">Javascript</span>
                <span class="tag tag-warning">PHP</span>
                <span class="tag tag-primary">Node.js</span>
            </p>

            <hr> -->

            <!-- <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
            </p> -->
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

<div class="col-md-5"><!-- About Me Box -->
    <div class="card card-success">
        <div class="card-header ">
            <h3 class="card-title text-center"><b>About Masjid
                    <?= $web['nama_masjid'] ?>
                </b>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <strong><i class="fas fa-phone mr-1"></i> Nomor WhatsApp</strong>

            <p class="text-muted">
                +
                <?= $web['wa_masjid'] ?>
            </p>

            <hr>
            <p>
                <strong><i class="fas fa-envelope mr-1"></i>Email</strong>
            <p class="text-muted">
                <?= $web['email'] ?>
            </p>
            </p>
            <hr>
            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

            <p class="text-muted">
                <?= $web['alamat'] ?>
            </p>

            <!-- <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

            <p class="text-muted">
                <span class="tag tag-danger">UI Design</span>
                <span class="tag tag-success">Coding</span>
                <span class="tag tag-info">Javascript</span>
                <span class="tag tag-warning">PHP</span>
                <span class="tag tag-primary">Node.js</span>
            </p>

            <hr> -->

            <!-- <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
            </p> -->
        </div>
    </div>
    <!-- /.card-body -->
</div>