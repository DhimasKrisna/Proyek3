<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah User</h1>
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
                    <form action="<?= base_url('admin/aksi_edit_User?id=' . $id) ?>" method="POST">
                        <?php
                            $this->db->where('id', $id);
                            $query = $this->db->get('user');
                            foreach ($query->result() as $row) {
                        ?>
                        
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?=$row -> username?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" name="password" id="password" class="form-control" value="<?=$row -> password?>" >
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="custom-select">
                                <option selected value="user">User</option>
                                <option value="pengurus">Pengurus</option>
                            </select>
                        </div>
                        <?php
                            }
                        ?>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>