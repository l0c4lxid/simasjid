<div class='col-md-12'>
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Laporan Kas Masjid</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="bulan">Bulan</label>
                        <select name="bulan" id="bulan" class="form-control">
                            <option value="">-- Pilih Bulan --</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <select name="tahun" id="tahun" class="form-control">
                            <option value="">-- Pilih Tahun --</option>
                            <?php for ($i = date('Y'); $i >= 2023; $i--) { ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>&nbsp;</label>
                        <button class="btn btn-primary" onclick="viewLaporan()">View</button>
                        <button class="btn btn-primary" onclick="printLaporan()">Print</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="Tabel"></div>
        </div>
    </div>
</div>

<script>
    function viewLaporan() {
        let bulan = $('#bulan').val();
        let tahun = $('#tahun').val();
        if (bulan == '') {
            alert('Bulan belum dipilih');
        } else if (tahun == '') {
            alert('Tahun belum dipilih');
        } else {
            $.ajax({
                type: "POST",
                url: "<?= base_url('KasMasjid/ViewLaporan') ?>",
                data: {
                    bulan: bulan,
                    tahun: tahun
                },
                dataType: "json",
                success: function (response) {
                    $('.Tabel').html(response.data);
                }
            });
        }
    }
    function printLaporan() {
        let printContents = $('.Tabel').html();
        let originalContents = $('body').html();
        $('body').html(printContents);
        window.print();
        $('body').html(originalContents);
    }


</script>