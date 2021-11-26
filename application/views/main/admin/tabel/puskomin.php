<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Rekapitulasi Data Puskomin</h1>
        <a href="cetak_harian" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Laporan Harian</a>
        <a href="cetak_mingguan" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Laporan Mingguan</a>
        <a href="cetak_bulanan" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Laporan Bulanan</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Puskomin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Nama</th>
                            <th>Judul</th>
                            <th>Jenis</th>
                            <th>Lokasi</th>
                            <th>Kecamatan</th>
                            <th>Isi</th>
                            <td>Tingkat</td>
                            <td>Gambar</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = $this->db->get('umum_puskomin');
                        foreach ($query->result() as $row) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row->nama ?></td>
                                <td><?= $row->judul ?></td>
                                <td><?= $row->jenis ?></td>
                                <td><?= $row->lokasi ?></td>
                                <td><?= $row->alamat ?></td>
                                <td><?= $row->isi ?></td>
                                <td><?= $row->level ?></td>
                                <td><img src="<?= base_url('/uploads/img/puskomin/' . $row->gambar); ?>" alt="" height="100" width="100"></td>
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