<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar Ormas</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Ormas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Nama</th>
                            <th>Kecamatan</th>
                            <th>Alamat</th>
                            <th>Jumlah Anggota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = $this->db->get('umum_ormas');
                        foreach ($query->result() as $row) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row->nama; ?></td>
                                <td><?= $row->kecamatan ?></td>
                                <td><?= $row->alamat ?></td>
                                <td><?= $row->jml_anggota ?></td>
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