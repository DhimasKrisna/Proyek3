<ul id="signup-step">
    <li id="personal" class="active">1</li>
    <li id="upload">2</li>
    <li id="kuisioner">3</li>
</ul>

<?php
if (isset($success)) {
    echo '<div>User record inserted successfully</div>';
}
$attributes = array('name' => 'frmRegistration', 'id' => 'signup-form');
?>

<?= form_open_multipart('layanan/proses_pengajuanPenelitian', $attributes); ?>
<div id="personal-field">
    <label><b>Nama Pemohon</b></label><span id="name-error" class="signup-error"></span>
    <div><input type="text" name="name" id="name" class="demoInputBox" /></div>

    <label><b>Universitas/Instansi/Lembaga</b></label><span id="instansi-error" class="signup-error"></span>
    <div><input type="text" name="instansi" id="instansi" class="demoInputBox" /></div>

    <label><b>Alamat Rumah</b></label><span id="alamat-error" class="signup-error"></span>
    <div><textarea type="text" name="alamat" id="alamat" class="demoInputBox" rows="5" cols="50" /></textarea></div>

    <label><b>Jurusan/Program</b></label><span id="jurusan-error" class="signup-error"></span>
    <div><input type="text" name="jurusan" id="jurusan" class="demoInputBox" /></div>

    <label><b>Status</b></label><span id="status-error" class="signup-error"></span>
    <div><input type="text" name="status" id="status" class="demoInputBox" /></div>

    <label><b>NIP/NIM/NIK</b></label><span id="NIK-error" class="signup-error"></span>
    <div><input type="text" name="NIK" id="NIK" class="demoInputBox" /></div>

    <label><b>Perihal Penelitian</b></label><span id="perihal-error" class="signup-error"></span>
    <div><input type="text" name="perihal" id="perihal" class="demoInputBox" /></div>

    <label><b>Waktu/Lama Penelitian</b></label><span id="waktu_penelitian-error" class="signup-error"></span>
    <div><input type="date" value="yyyy-MM-dd" name="waktu_mulai_penelitian" id="waktu_mulai_penelitian" class="demoInputBox" /></div><br>
    <div><input type="date" value="yyyy-MM-dd" name="waktu_selesai_penelitian" id="waktu_selesai_penelitian" class="demoInputBox" /></div>

    <label><b>Lokasi/Tempat Penelitian</b></label><span id="lokasi_penelitian-error" class="signup-error"></span>
    <div><input type="text" name="lokasi_penelitian" id="lokasi_penelitian" class="demoInputBox" /></div>

    <label><b>Tembusan Surat</b></label><span id="tembusan_surat-error" class="signup-error"></span>
    <div><input type="text" name="tembusan_surat" id="tembusan_surat" class="demoInputBox" /></div>

    <label><b>Anggota Tim Peniliti</b></label><span id="anggota_tim-error" class="signup-error"></span>
    <div><textarea type="text" name="anggota_tim" id="anggota_tim" class="demoInputBox" rows="5" cols="50" /></textarea></div>
</div>

<div id="upload-field" style="display:none;">
    <label><b>Berkas yang diperlukan</b></label><span id="berkas-error" class="signup-error"></span>
    <div><input type="file" name="berkas" id="berkas" class="demoInputBox" /></div>
</div>

<div id="kuisioner-field" style="display:none;">
    <label><b>Berapa umur anda? :</b></label><span id="umur_responden-error" class="signup-error"></span>
    <div><input type="number" name="umur_responden" id="umur_responden" class="demoInputBox" /></div><br>

    <?php
    $no = 1;
    $query = $this->db->get('layanan_pertanyaan');
    foreach ($query->result() as $row) {
    ?>
        <div id="kuisioner-form">
            <label><b><?= $no . '. ' .  $row->pertanyaan ?></b> <span id="p-<?= $row->id ?>-error" class="signup-error"></span></label>
            <div>
                <select class="form-control" id="p-<?= $row->id ?>" name="p<?= $row->id ?>">
                    <option><?= $row->respons1 ?></option>
                    <option><?= $row->respons2 ?></option>
                    <option><?= $row->respons3 ?></option>
                    <option><?= $row->respons4 ?></option>
                </select>
            </div>
        </div>
    <?php
        $no = $no + 1;
    } ?>

</div>

<div>
    <input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none;">
    <input class="btnAction" type="button" name="next" id="next" value="Next">
    <input class="btnAction" type="submit" name="finish" id="finish" value="Finish" style="display:none;">
</div>
<?= form_close() ?>

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright 2021 &copy; Badan Kesatuan Bangsa dan Politik Kabupaten Malang</span>
        </div>
    </div>
</footer>

</body>

</html>