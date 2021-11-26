<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar Partai Politik</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Partai Politik</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('admin/tambah_politik') ?>" class="btn btn-success btn-sm">
                    Tambah Parpol
                </a>
                <br>
                </br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Nama Partai</th>
                            <th>Periode</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = $this->db->get('umum_politik');
                        foreach ($query->result() as $row) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row->nama_parpol; ?></td>
                                <td><?= $row->periode ?></td>
                                <td>
                                    <a href="<?= base_url('admin/edit_politik?id=' . $row->id) ?>" class="btn btn-success">Edit</a>
                                    <a href="<?= base_url('admin/hapus_politik?id=' . $row->id) ?>" class="btn btn-danger">Hapus</a>
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