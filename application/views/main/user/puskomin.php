<?php
$total_data = $this->db->count_all('harga_bawang');

$where="month(tanggal_panen)='01' and year(tanggal_panen) = '2020'";
// $this->db->where($where);
// $januari =  $this->db->get('harga_bawang');

$this->db->where($where);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $januari = $row->jumlah_panen;
}

// if ($januari != null) {
//     $januari = $januari->jumlah_panen;
// } else {
//     $januari = 0;
// }

//feb
$where2f="month(tanggal_panen)='02' and year(tanggal_panen) = '2020'";

$this->db->where($where2f);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $feb = $row->jumlah_panen;
}

//maret
$where3m="month(tanggal_panen)='03' and year(tanggal_panen) = '2020'";

$this->db->where($where3m);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $mar = $row->jumlah_panen;
}

//april
$where4a="month(tanggal_panen)='03' and year(tanggal_panen) = '2020'";

$this->db->where($where4a);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $apr = $row->jumlah_panen;
}

//mei
$where5m="month(tanggal_panen)='05' and year(tanggal_panen) = '2020'";

$this->db->where($where5m);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $mei = $row->jumlah_panen;
}

//juni
$where6j="month(tanggal_panen)='06' and year(tanggal_panen) = '2020'";

$this->db->where($where6j);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $jun = $row->jumlah_panen;
}

//juli
$where7j="month(tanggal_panen)='07' and year(tanggal_panen) = '2020'";

$this->db->where($where7j);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $jul = $row->jumlah_panen;
}

//agustus
$where8a="month(tanggal_panen)='08' and year(tanggal_panen) = '2020'";

$this->db->where($where8a);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $agu = $row->jumlah_panen;
}

//september
$where9s="month(tanggal_panen)='09' and year(tanggal_panen) = '2020'";

$this->db->where($where9s);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $sep = $row->jumlah_panen;
}

//oktober
$where10o="month(tanggal_panen)='10' and year(tanggal_panen) = '2020'";

$this->db->where($where10o);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $okt = $row->jumlah_panen;
}

//november
$where11n="month(tanggal_panen)='11' and year(tanggal_panen) = '2020'";

$this->db->where($where11n);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $nov = $row->jumlah_panen;
}

//desember
$where12d="month(tanggal_panen)='12' and year(tanggal_panen) = '2020'";

$this->db->where($where12d);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $des = $row->jumlah_panen;
}

// $where2="month(tanggal_panen)='02' and year(tanggal_panen) = '2020'";
// $this->db->where($where2);
// $this->db->from('harga_bawang');
// $data_segera =  $this->db->count_all_results();
// if ($data_segera != null) {
//     $persentase_dataSegera = $data_segera / $total_data * 100;
// } else {
//     $persentase_dataSegera = 0;
// }

// $where3="month(tanggal_panen)='03' and year(tanggal_panen) = '2020'";
// $this->db->where($where3);
// $this->db->from('harga_bawang');
// $data_penting =  $this->db->count_all_results();
// if ($data_penting != null) {
//     $persentase_dataPenting = $data_penting / $total_data * 100;
// } else {
//     $persentase_dataPenting = 0;
// }

$max=$januari+$feb+$mar+$apr+$mei+$jun+$jul+$agu+$sep+$okt+$nov+$des;

$pJan=$januari/$max*100;
$pFeb=$feb/$max*100;
$pMar=$mar/$max*100;
$pApr=$apr/$max*100;
$pMei=$mei/$max*100;
$pJun=$jun/$max*100;
$pJul=$jul/$max*100;
$pAgu=$agu/$max*100;
$pSep=$sep/$max*100;
$pOkt=$okt/$max*100;
$pNov=$nov/$max*100;
$pDes=$des/$max*100;

?>

<!-- Grafik -->
<section class="galeri">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4>Grafik Hasil Panen 2020</h4>
                <hr>
            </div>
        </div>
        <!-- Chart -->
        <div class="chart-pie pt-4">
            <canvas id="myPieChart"></canvas>
        </div>
        <!-- januari -->
        <h4 class="small font-weight-bold mt-5">
            Januari <span class="float-right"><?= $januari ?> Kwintal</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: <?= $pJan ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <!-- Februari -->
        <h4 class="small font-weight-bold">
            Februari <span class="float-right"><?= $feb ?> Kwintal</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-alert" role="progressbar" style="width: <?= $pFeb ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <!-- Maret -->
        <h4 class="small font-weight-bold">
            Maret <span class="float-right"><?= $mar ?> Kwintal</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-alert" role="progressbar" style="width: <?= $pMar ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <!-- April -->
        <h4 class="small font-weight-bold">
            April <span class="float-right"><?= $apr ?> Kwintal</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-alert" role="progressbar" style="width: <?= $pApr ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <!-- Mei -->
        <h4 class="small font-weight-bold">
            Mei <span class="float-right"><?= $mei ?> Kwintal</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-alert" role="progressbar" style="width: <?= $pMei ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <!-- Juni -->
        <h4 class="small font-weight-bold">
            Juni <span class="float-right"><?= $jun ?> Kwintal</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-alert" role="progressbar" style="width: <?= $pJun ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <!-- Juli -->
        <h4 class="small font-weight-bold">
            Juli <span class="float-right"><?= $jul ?> Kwintal</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-alert" role="progressbar" style="width: <?= $pJul ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <!-- Agustus -->
        <h4 class="small font-weight-bold">
            Agustus <span class="float-right"><?= $agu ?> Kwintal</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-alert" role="progressbar" style="width: <?= $pAgu ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <!-- September -->
        <h4 class="small font-weight-bold">
            September <span class="float-right"><?= $sep ?> Kwintal</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-alert" role="progressbar" style="width: <?= $pSep ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <!-- Oktober -->
        <h4 class="small font-weight-bold">
            Oktober <span class="float-right"><?= $okt ?> Kwintal</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-alert" role="progressbar" style="width: <?= $pOkt ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <!-- November -->
        <h4 class="small font-weight-bold">
            November <span class="float-right"><?= $nov ?> Kwintal</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-alert" role="progressbar" style="width: <?= $pNov ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <!-- Desember -->
        <h4 class="small font-weight-bold">
            Desember <span class="float-right"><?= $des ?> Kwintal</span>
        </h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-alert" role="progressbar" style="width: <?= $pNov ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
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
                type: "line",
                data: {
                    labels: ["Januari","Februari", "Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"],
                    datasets: [{
                        data: [<?= $januari ?>,<?= $feb?> ,<?= $mar ?>, <?= $apr ?>,<?= $mei ?>, <?= $jun?>,<?= $jul?>,<?= $agu?>,<?= $sep?>,<?= $okt?>,<?= $nov?>,<?= $des?>],
                        backgroundColor: ['rgba(0, 137, 132, .2)',],
                        borderColor: ['rgba(0, 10, 130, .7)',],
                        borderWidth:2,
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
    
</div>