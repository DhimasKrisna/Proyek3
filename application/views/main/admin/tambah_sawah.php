<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Penanaman Bawang Merah</h1>
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
                    <form action="<?= base_url('admin/aksi_tambah_sawah') ?>" method="POST">
                        
                        <div class="form-group">
                            <label for="pemilik">Pemilik</label>
                            <select name="pemilik" id="pemilik" class="custom-select">
                                <?php
                                    // $this->db->where('role', 'user');
                                    $query = $this->db->get('user');
                                    foreach ($query->result() as $row) {
                                    ?>
                                    <option value=<?= $row->username?>><?= $row->username?></option>
                                <?php
                                    }
                                    ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select name="jenis" id="jenis" class="custom-select">
                                <?php
                                    // $this->db->where('role', 'user');
                                    $query = $this->db->get('jenis_bawang');
                                    foreach ($query->result() as $row) {
                                    ?>
                                    <option value=<?= $row->jenis?>><?= $row->jenis?></option>
                                <?php
                                    }
                                    ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tanam">Tanggal Tanam</label>
                            <input type="date" name="tanam" id="tanam" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>