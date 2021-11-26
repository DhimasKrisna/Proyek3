<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Responden Kuisioner</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Responden Kuisioner</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?php echo site_url(); ?>/admin/grafik_kuisioner">
                    <button class="btn btn-success btn-sm"> Laporan Grafik
                    </button>
                </a>
                <br>
                </br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>p1</th>
                            <th>p2</th>
                            <th>p3</th>
                            <th>p4</th>
                            <th>p5</th>
                            <th>p6</th>
                            <th>p7</th>
                            <th>p8</th>
                            <th>p9</th>
                            <th>dibuat pada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = $this->db->get('layanan_kuisioner');
                        foreach ($query->result() as $row) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row->nama_responden; ?></td>
                                <td><?= $row->umur_responden ?></td>
                                <td><?= $row->p1 ?></td>
                                <td><?= $row->p2 ?></td>
                                <td><?= $row->p3 ?></td>
                                <td><?= $row->p4 ?></td>
                                <td><?= $row->p5 ?></td>
                                <td><?= $row->p6 ?></td>
                                <td><?= $row->p7 ?></td>
                                <td><?= $row->p8 ?></td>
                                <td><?= $row->p9 ?></td>
                                <td><?= $row->dibuat_pada ?></td>
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