<style>
    .validasi-error {
        color: #FF0000;
    }
</style>
<script src="<?= base_url('assets/js/user/jquery-1.10.2.js') ?>"></script>
<script src="<?= base_url('assets/js/user/validasi-ormas.js') ?>"></script>
<div class="container">
    <h3>Tambah Organisasi Masyarakat</h3>
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url() ?>user/aksi_tambahOrmas?kec=<?= $this->session->userdata('kec') ?>" method="POST">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" id="nama" name="nama" placeholder="Nama Ormas" class="form-control">
                        <span id="nama-error" class="validasi-error"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <input type="text" id="kecamatan" name="kecamatan" value="<?= $this->session->userdata('kec') ?>" class="form-control" readonly>
                        <span id="kecamatan-error" class="validasi-error"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control">
                        <span id="alamat-error" class="validasi-error"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jml_anggota" class="col-sm-2 col-form-label">Jumlah Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" id="jml_anggota" name="jml_anggota" placeholder="Jumlah Anggota" class="form-control">
                        <span id="jumlahAnggota-error" class="validasi-error"></span>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <input type="submit" id="submit" class="btn btn-success" value="Tambah">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>