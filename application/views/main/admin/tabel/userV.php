<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar User</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Daftar</th>
                            <th>Diubah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $this->db->where('aktif', 'tidak');
                        $query = $this->db->get('user');
                        foreach ($query->result() as $row) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row->username ?></td>
                                <td><?= $row->password ?></td>
                                <td><?= $row->role ?></td>
                                <td><?= $row->dibuat ?></td>
                                <td><?= $row->diubah ?></td>
                                <td>
                                    <a href="<?= base_url('admin/active_user?id=' . $row->id) ?>" class="btn btn-success">Verifikasi</a>
                                </td>
                            </tr>
                        <?php
                            $no = $no + 1;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>