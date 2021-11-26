<div class="container">
    <?php
    if ($this->session->userdata('nik') != null) {
    ?>
        <div class="row mb-3">
            <div class="col">
                <a href="<?= base_url('user/tambah_ormas') ?>" class="btn btn-success">Tambah Data</a>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Organisasi Masyarakat</h6>
                </div>
                <div class="card-body">
                    <table id="dataTable" width="100%" cellspacing="0" class="table table-hover">
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Nama Organisasi</td>
                                <td>Kecamatan</td>
                                <td>Alamat</td>
                                <td>Jumlah Anggota</td>

                                <?php
                                if ($this->session->userdata('nik') != null) {
                                ?>
                                    <td>aksi</td>
                                <?php
                                }
                                ?>
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
                                    <td><?= $row->nama ?></td>
                                    <td><?= $row->kecamatan ?></td>
                                    <td><?= $row->alamat ?></td>
                                    <td><?= $row->jml_anggota ?></td>
                                    <?php
                                    if ($this->session->userdata('nik') != null) {
                                    ?>
                                        <td>
                                            <?php if ($this->session->userdata('kec') == $row->kecamatan) { ?>
                                                <a href="<?= base_url('user/edit_ormas?id=' . $row->id) ?>" class="btn btn-primary">Sunting</a>
                                                <a href="<?= base_url('user/hapus_ormas?id=' . $row->id) ?>" class="btn btn-danger">Hapus</a>
                                            <?php } else { ?>
                                                <div class="btn btn-secondary isDisabled">Sunting</div>
                                                <div class="btn btn-secondary isDisabled">Hapus</div>
                                            <?php } ?>
                                        </td>
                                    <?php
                                    }
                                    ?>
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
</div>