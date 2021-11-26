
<style>
    .validasi-error {
        color: #FF0000;
    }
</style>
<script src="<?= base_url('assets/js/user/jquery-1.10.2.js') ?>"></script>
<script src="<?= base_url('assets/js/user/validasi-politik.js') ?>"></script>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Partai Politik</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Masukkan Data:</h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url() ?>admin/proses_editPolitik?id=<?= $id?>" method="POST">
                        <?php
                            $query = $this->db->get_where('umum_politik', array('id' => $id));
                            foreach ($query->result() as $row) {
                        ?>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Parpol</label>
                            <div class="col-sm-10">
                                <input type="text" id="nama" name="nama" placeholder="Nama Parpol" class="form-control" value="<?= $row->nama_parpol?>">
                                <span id="nama-error" class="validasi-error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kecamatan" class="col-sm-2 col-form-label">Periode</label>
                            <div class="col-sm-10">
                                <input type="text" id="kecamatan" name="periode" placeholder="Periode" class="form-control" value="<?= $row->periode?>">
                                <span id="kecamatan-error" class="validasi-error"></span>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <input type="submit" value="Edit" id="submit" class="btn btn-success">
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>