<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Harga Bawang Merah</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Masukkan Data :</h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/aksi_edit_harga?id=' . $id) ?>" method="POST">
                        

                        <?php
                            $this->db->where('id', $id);
                            $query = $this->db->get('harga_bawang');
                            foreach ($query->result() as $row) {
                        ?>

                        <div class="form-group">
                            <label for="jmlPanen">Jumlah Panen (kw)</label>
                            <input type="text" name="jmlPanen" id="jmlPanen" class="form-control" value="<?= $row->jumlah_panen?>">
                        </div>

                        <div class="form-group">
                            <label for="tglPanen">Tanggal Panen</label>
                            <input type="date" name="tglPanen" id="tglPanen" class="form-control" value="<?= $row->tanggal_panen?>">
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga /kg</label>
                            <input type="text" name="harga" id="harga" class="form-control" value="<?= $row->harga?>">
                        </div>

                        <?php
                            }
                        ?>
                        
                        <button type="submit" class="btn btn-success">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>