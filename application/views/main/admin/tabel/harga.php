<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar Harga</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Harga</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Jumlah Panen (kw)</th>
                            <th>Tanggal Panen</th>
                            <th>Harga (1 kg)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        // $this->db->where('role', 'user');
                        $query = $this->db->get('harga_bawang');
                        foreach ($query->result() as $row) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row->jumlah_panen ?></td>
                                <td><?= $row->tanggal_panen ?></td>
                                <td><?= $row->harga ?></td>
                                <td>
                                    <a href="<?= base_url('admin/edit_harga?id=' . $row->id) ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('admin/hapus_harga?id=' . $row->id) ?>" class="btn btn-danger">Hapus</a>
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