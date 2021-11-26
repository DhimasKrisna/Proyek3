<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar User</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Pemilik</th>
                            <th>Jenis</th>
                            <th>Tanggal Tanam</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        // $this->db->where('role', 'user');
                        $query = $this->db->get('sawah');
                        foreach ($query->result() as $row) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row->pemilik ?></td>
                                <td><?= $row->jenis ?></td>
                                <td><?= $row->tgl_tanam ?></td>
                                <td>
                                    <a href="<?= base_url('admin/edit_sawah?id=' . $row->id) ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('admin/hapus_sawah?id=' . $row->id) ?>" class="btn btn-danger">Hapus</a>
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