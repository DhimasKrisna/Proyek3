<div class="container">
    <h3>Tambah Tempat Ibadah</h3>
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url() ?>user/aksi_editTempatIbadah?id=<?= $_GET['id'] ?>" method="POST">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" id="nama" name="nama" placeholder="Nama Tempat Ibadah" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <input type="text" id="kecamatan" name="kecamatan" placeholder="<?= $this->session->userdata('kec') ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" id="alamat" name="alamat" placeholder="Alamat Tempat Ibadah" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <input type="text" id="agama" name="agama" placeholder="agama" class="form-control">
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>