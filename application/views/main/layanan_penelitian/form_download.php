<div class="container">
    <h3>Hasil Pencarian</h3>
    <hr>
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Pengajuan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Instansi</th>
                                    <th>Perihal</th>
                                    <th>Status</th>
                                    <th>Komentar</th>
                                    <th>Balasan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php
                            if (count($data) > 0) {
                                $no = 1;
                                foreach ($data as $user) { ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $user['NIK'] ?></td>
                                        <td><?= $user['nama_lengkap'] ?> </td>
                                        <td><?= $user['instansi'] ?> </td>
                                        <td><?= $user['perihal'] ?> </td>
                                        <td><?= $user['status_surat'] ?> </td>
                                        <td><?= $user['komentar'] ?> </td>
                                        <td><?= $user['balasan'] ?> </td>
                                        <td> <a href="<?= base_url('layanan/download_balasan?id=' . $user['id']) ?>" class="btn btn-success">Unduh Balasan</a></td>
                                    </tr>
                                <?php
                                    $no = $no + 1;
                                }
                            } else { ?>
                                Data tidak ditemukan;
                            <?php } ?>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>