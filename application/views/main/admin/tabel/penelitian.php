<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar Pengajuan Penelitian</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Pengajuan Penelitian</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Instansi</th>
                            <th>Perihal</th>
                            <th>Tembusan</th>
                            <th>Status Surat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = $this->db->get('layanan_penelitian');
                        foreach ($query->result() as $row) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row->NIK ?></td>
                                <td><?= $row->nama_lengkap; ?></td>
                                <td><?= $row->instansi ?></td>
                                <td><?= $row->perihal ?></td>
                                <td><?= $row->tembusan_surat ?></td>
                                <td><?= $row->status_surat ?></td>
                                <td>
                                    <a href="<?= base_url('admin/detail_pengajuan_penelitian?id=' . $row->id) ?>" class="btn btn-primary">Detail</a>
                                    <a href="<?= base_url('admin/download_berkas?id=' . $row->id) ?>" class="btn btn-success">Unduh Berkas</a>
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