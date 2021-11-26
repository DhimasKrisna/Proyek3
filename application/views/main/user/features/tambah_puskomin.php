<style>
    .validasi-error {
        color: #FF0000;
    }
</style>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    // Get Lokasi
    getLocation();

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        }
    }

    function showPosition(position) {
        var latlong = `${position.coords.latitude}, ${position.coords.longitude}`;
        var input = document.getElementById("latlong-input");
        input.value = latlong;
    }

    // validasi
    function validate() {
        var output = true;
        $(".validasi-error").html('');
        if (!($("#nama").val())) {
            output = false;
            $("#nama-error").html("Nama Required!");
            console.log(output)
        }
        if (!($("#jabatan").val())) {
            output = false;
            $("#jabatan-error").html("Jabatan Required!");
            console.log(output)
        }
        if (!($("#judul").val())) {
            output = false;
            $("#judul-error").html("Judul Required!");
            console.log(output)
        }
        if (!($("#nik").val())) {
            output = false;
            $("#NIK-error").html("NIK Required!");
            console.log(output)
        }
        if (!($("#alamat").val())) {
            output = false;
            $("#alamat-error").html("Alamat Required!");
            console.log(output)
        }
        if (!($("#gambar").val())) {
            output = false;
            $("#gambar-error").html("Gambar Required!");
            console.log(output)
        }
        if (!($("#isi").val())) {
            output = false;
            $("#isi-error").html("Isi Berita Required!");
            console.log(output)
        }
        if (!($("#latlong-input").val())) {
            output = false;
            $("#lokasi-error").html("Lokasi Required!");
            console.log(output)
        }
        if (!($("#level").val())) {
            output = false;
            $("#level-error").html("Level Required!");
            console.log(output)
        }
        if (!($("#ditujukan").val())) {
            output = false;
            $("#ditujukan-error").html("Ditujukan Required!");
            console.log(output)
        }
        return output
    }

    $(document).ready(function() {
        $("input#submit").click(function(e) {
            var output = validate();
            if (output === true) {
                return true;
            } else {
                //prevent refresh
                e.preventDefault();
                console.log(output)
            }
        })
    })
</script>
<?php
foreach ($ktp as $row) {
?>
    <div class="container">
        <h3>Tambah Puskomin</h3>
        <div class="row">
            <div class="col-lg-8">
                <form action="<?= base_url() ?>user/aksi_tambah_puskomin?kec=<?= $this->session->userdata('kec') ?>&nama=<?= $row['nama']; ?>&nik=<?= $row['nik']; ?>" method="POST" id="form" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" id="nama" name="nama" value="<?= $row['nama']; ?>" class="form-control" readonly>
                            <span id="nama-error" class="validasi-error"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" id="jabatan" name="jabatan" placeholder="Jabatan" class="form-control">
                            <span id="jabatan-error" class="validasi-error"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" id="nik" name="nik" value="<?= $this->session->userdata('nik') ?>" class="form-control" readonly>
                            <span id="NIK-error" class="validasi-error"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <input type="text" id="alamat" name="alamat" value="<?= $this->session->userdata('kec') ?>" class="form-control" readonly>
                            <span id="alamat-error" class="validasi-error"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" id="gambar" name="gambar" placeholder="gambar" class="form-control">
                            <span id="gambar-error" class="validasi-error"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" id="judul" name="judul" placeholder="Judul" class="form-control">
                            <span id="judul-error" class="validasi-error"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="isi" name="isi" placeholder="Isi Berita" rows="3"></textarea>
                            <span id="isi-error" class="validasi-error"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-10">
                            <input type="text" id="latlong-input" name="latlong-input" placeholder="Lokasi" class="form-control" readonly>
                            <span id="lokasi-error" class="validasi-error"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="level" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="level" name="level">
                                <option>Biasa</option>
                                <option>Penting</option>
                                <option>Segera</option>
                            </select>
                            <span id="kategori-error" class="validasi-error"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="jenis" name="jenis">
                                <option>Penyebaran Paham/Ideologi yang bertentangan dengan Pancasila dan Undang-undang Dasar 1945</option>
                                <option>Gejala gerakan separatis yang mengancam Keutuhan Bangsa/NKRI</option>
                                <option>Penistaan/penodaan terhadap lambang dan simbol-simbol Negara</option>
                                <option>Penyalahgunaan atribut Negara Lain, Gerakan Separatis/Terorisme dan Organisasi Terlarang</option>
                                <option>Penyalahgunaan nama dan atribut Instansi Pemerintah, TNI/POLRI/BIN untuk mengambil keuntungan pribadi dan meresahkan masyarakat</option>
                                <option>Fanatisme Sempit yang menyebabkan ketidakharmonisan hubungan sosial diantara anggota masyarakat dari berbagai ras, suku, dan etnis</option>
                                <option>Kenakalan remaja yang merusak mental generasi muda Indonesia seperti tawuran, penyalahgunaan narkoba, pergaulan bebas, geng motor, balapan liar, dll</option>
                                <option>Dimasyarakat, baik yang dilakukan perorangan maupum kelompok/lembaga</option>
                                <option>Penyebaran pamflet, baliho, spanduk, selebaran yang dapat memecahbelah persatuan di masyarakat</option>
                                <option>Situasi Politik pada setiap Tahapan Pelaksanaan Pemilihan Umum (PILPRES, PILEG dan PILKADA)</option>
                                <option>Situasi Politik pada setiap Tahapan Pemilihan Kepala Desa</option>
                                <option>Ketidakpuasan masyarakat terhadap Kebijakan Pemerintah/Pemerintah Daerah/Pemerintah Desa</option>
                                <option>Ketidakpuasan masyarakat terhadap Implementasi peraturan perundang undangan yang berlaku</option>
                                <option>Penyampaian Aspirasi/Unjuk Rasa</option>
                                <option>Aktivitas Partai Politik dan/atau Lembaga Politik lainnya</option>
                                <option>Diharmonisasi antar Instansi/Lembaga</option>
                                <option>Aktivitas Ormas/LSM yang dapat mengganggu ketertiban umum dan ketentraman masyarakat</option>
                                <option>Penyebaran paham menyimpang/aliran sesat yang meresahkan masyarakat</option>
                                <option>Ketidakharmonisan hubungan sosial antara umat beragama</option>
                                <option>Permasalahan Pendirian Rumah Ibadah</option>
                                <option>Pendirian tempat usaha yang meresahkan masyarakat</option>
                                <option>Terputusnya Jalur Transportasi (kondisi infrastruktur jalan labil dan/atau jembatan ambruk)</option>
                                <option>Jalur transportasi, rawan munculnya tindak kejahatan</option>
                                <option>Tidak berfungsinya fasilitas umum seperti Kantor Desa, Balai Desa, Puskesmas/Puskesmas Pembantu, Polindes, Sekolah, Tempat-tempat Ibadah, dan Fasilitas Umum lainnya yang menghambat pelayanan sosial kemasyarakatan</option>
                                <option>Kelangkaan dan Ketidakstabilan Harga Sembilan Bahan Pokok (Sembako) yang dapat mempengaruhi situasi sosial kemasyarakatan</option>
                                <option>Kelangkaan pupuk dan bahan bakar minyak yang mempengaruhi penunjangan ekonomi produktif masyarakat</option>
                                <option>Potensi kerawanan bencana, baik bencana perang, bencana alam dan/atau akibat ulah manusia</option>
                                <option>Potensi konfil sosial</option>
                                <option>Aktivitas warga negara asing, tenaga kerja asing, dan lembaga asing yang mencurigakan dan meresahkan masyarakat</option>
                                <option>Aktivitas orang tidak dikenal yang mencurigakan</option>
                                <option>Penyebaran paham radikal dan terorisme</option>
                                <option>Munculnya gizi buruk, busung lapar dan wabah penyakit yang merupakan kejadian luar biasa</option>
                                <option>Pengrusakan lingkungan hidup (faktor kesenjangan) baik yang dilakukan oleh perorangan, lembaga maupun perusahaan/pihak swasta</option>
                                <option>Pengrusakan dan penutupan paksa fasilitas umum baik yang dilakukan oleh perorangan, lembaga dan perusahaan swasta</option>
                                <option>Isu-isu Negatif yang meresahkan masyarakat</option>
                            </select>
                            <!-- <span id="kategori-error" class="validasi-error"></span> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ditujukan" class="col-sm-2 col-form-label">Ditujukan</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="ditujukan" name="ditujukan">
                                <option>PMK</option>
                                <option>TNI</option>
                                <option>POLRI</option>
                                <option>Bakesbang-cqKabib-wasnas</option>
                            </select>
                            <span id="ditujukan-error" class="validasi-error"></span>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <input type="submit" id="submit" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>