<?php
$total_data = $this->db->count_all('umum_puskomin');

$this->db->where('level', 'biasa');
$this->db->from('umum_puskomin');
$data_biasa =  $this->db->count_all_results();
if ($data_biasa != null) {
    $persentase_dataBiasa = $data_biasa / $total_data * 100;
} else {
    $persentase_dataBiasa = 0;
}

$this->db->where('level', 'segera');
$this->db->from('umum_puskomin');
$data_segera =  $this->db->count_all_results();
if ($data_segera != null) {
    $persentase_dataSegera = $data_segera / $total_data * 100;
} else {
    $persentase_dataSegera = 0;
}

$this->db->where('level', 'penting');
$this->db->from('umum_puskomin');
$data_penting =  $this->db->count_all_results();
if ($data_penting != null) {
    $persentase_dataPenting = $data_penting / $total_data * 100;
} else {
    $persentase_dataPenting = 0;
}
?>

<!-- Grafik -->
<section class="galeri">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4>Grafik</h4>
                <hr>
            </div>
        </div>
        <!-- Chart -->
        <div class="chart-pie pt-4">
            <canvas id="myPieChart"></canvas>
        </div>
        <h4 class="small font-weight-bold">
            Biasa <span class="float-right"><?= $persentase_dataBiasa ?>%</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: <?= $persentase_dataBiasa ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">
            Penting <span class="float-right"><?= $persentase_dataPenting ?>%</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-info" role="progressbar" style="width: <?= $persentase_dataPenting ?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">
            Segera <span class="float-right"><?= $persentase_dataSegera ?>%</span>
        </h4>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: <?= $persentase_dataSegera ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <script src="<?= base_url('assets/vendor/admin/chart.js/Chart.min.js') ?>"></script>
        <script type="text/javascript">
            // Set new default font family and font color to mimic Bootstrap's default styling
            (Chart.defaults.global.defaultFontFamily = "Nunito"),
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = "#858796";

            // Pie Chart Example
            var ctx = document.getElementById("myPieChart");
            var myPieChart = new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: ["Biasa", "Penting", "Segera"],
                    datasets: [{
                        data: [<?= $data_biasa ?>, <?= $data_penting ?>, <?= $data_segera ?>],
                        backgroundColor: ["#4e73df", "#1cc88a", "#36b9cc"],
                        hoverBackgroundColor: ["#2e59d9", "#17a673", "#2c9faf"],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }, ],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: "#dddfeb",
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                    },
                    legend: {
                        display: false,
                    },
                    cutoutPercentage: 80,
                },
            });
        </script>


    </div>
</section>
<div id="space" style="margin-top:100px"></div>
<!-- akhir Grafik -->

<div class="container">
    <?php
    if ($this->session->userdata('nik') != null) {
    ?>
        <div class="row mb-3">
            <div class="col">
                <a href="<?= base_url('user/tambah_puskomin') ?>/<?= $this->session->userdata('nik') ?>" class="btn btn-success">Tambah Data</a>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="row">
        <?php
        $no = 1;
        if ($this->session->userdata('nik') != null) {
            $query = $this->db->get('umum_puskomin');
        } else {
            $query = $this->db->get_where('umum_puskomin', array('level' => 'Biasa'));
        }

        foreach ($query->result() as $row) {
            $tmp = (str_word_count($row->isi) > 20 ? substr($row->isi, 0, 100) . ".." : $row->isi);
        ?>
            <div class="col-sm-4">
                <div class="card mb-3">
                    <img src="<?= base_url(); ?>/uploads/img/puskomin/<?= $row->gambar ?>" alt="gambar puskomin.." class="card-img-top" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $row->judul ?> </h5>
                        <p class="card-text"><?= $tmp ?></p>
                        <p class="card-text"><small class="text-muted"><?= $row->alamat ?> | <?= $row->lokasi ?></small></p>
                        <a href="<?= base_url('user/lihat_puskomin?id=' . $row->id) ?>" class="btn btn-success">Lihat</a>
                        <?php
                        if ($this->session->userdata('nik') != null) {
                        ?>
                            <?php if ($this->session->userdata('kec') == $row->alamat) { ?>
                                <a href="<?= base_url('user/hapus_puskomin?id=' . $row->id) ?>" class="btn btn-danger">Hapus</a>
                            <?php } else { ?>
                                <div class="btn btn-secondary isDisabled">Hapus</div>
                            <?php } ?>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php
            $no = $no + 1;
        }
        ?>
    </div>
</div>