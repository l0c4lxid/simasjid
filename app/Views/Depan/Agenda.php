<div class="col-md-12">
            <div class="card card-success card-outline">
              <div class="card-header">
                <h3 class="card-title"><b>Data Kegiatan di Bulan <?= date('M Y')?></b></h3>

                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class='row'>
                    <?php foreach ($agenda as $key => $value) {?>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon"><i class="far fa-calendar-alt text-success"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text"><b>Kegiatan</b></span>
                                    <span class="info-box-number"><b><?= $value['nama_kegiatan']?></b></span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 0%"></div>
                                    </div>
                                    <span class="progress-description">
                                     Tanggal : <?= $value['tanggal']?><br>
                                      Waktu : <?= $value['jam']?> - Selesai
                                    </span>
                                </div>
              <!-- /.info-box-content -->
                        </div>
                        </div>
                        
                        <?php }?>
                        </div>
                        </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          