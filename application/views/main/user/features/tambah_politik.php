<style>
    .validasi-error {
        color: #FF0000;
    }
</style>
<script src="<?= base_url('assets/js/user/jquery-1.10.2.js') ?>"></script>
<script src="<?= base_url('assets/js/user/validasi-politik.js') ?>"></script>
<div class="container">
    <h3>Tambah Politik</h3>
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url() ?>user/aksi_tambahPolitik?kec=<?= $this->session->userdata('kec') ?>" method="POST">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Parpol</label>
                    <div class="col-sm-10">
                        <input type="text" id="nama" name="nama" placeholder="Nama Parpol" class="form-control">
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
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <input type="submit" value="Tambah" id="submit" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>