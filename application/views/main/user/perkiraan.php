<?php

$where="month(tanggal_panen)='01' and year(tanggal_panen) = '2020'";

$this->db->where($where);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $januari = $row->harga;
}

//feb
$where2f="month(tanggal_panen)='02' and year(tanggal_panen) = '2020'";

$this->db->where($where2f);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $feb = $row->harga;
}

//maret
$where3m="month(tanggal_panen)='03' and year(tanggal_panen) = '2020'";

$this->db->where($where3m);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $mar = $row->harga;
}

//april
$where4a="month(tanggal_panen)='03' and year(tanggal_panen) = '2020'";

$this->db->where($where4a);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $apr = $row->harga;
}

//mei
$where5m="month(tanggal_panen)='05' and year(tanggal_panen) = '2020'";

$this->db->where($where5m);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $mei = $row->harga;
}

//juni
$where6j="month(tanggal_panen)='06' and year(tanggal_panen) = '2020'";

$this->db->where($where6j);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $jun = $row->harga;
}

//juli
$where7j="month(tanggal_panen)='07' and year(tanggal_panen) = '2020'";

$this->db->where($where7j);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $jul = $row->harga;
}

//agustus
$where8a="month(tanggal_panen)='08' and year(tanggal_panen) = '2020'";

$this->db->where($where8a);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $agu = $row->harga;
}

//september
$where9s="month(tanggal_panen)='09' and year(tanggal_panen) = '2020'";

$this->db->where($where9s);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $sep = $row->harga;
}

//oktober
$where10o="month(tanggal_panen)='10' and year(tanggal_panen) = '2020'";

$this->db->where($where10o);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $okt = $row->harga;
}

//november
$where11n="month(tanggal_panen)='11' and year(tanggal_panen) = '2020'";

$this->db->where($where11n);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $nov = $row->harga;
}

//desember
$where12d="month(tanggal_panen)='12' and year(tanggal_panen) = '2020'";

$this->db->where($where12d);
$query = $this->db->get('harga_bawang');
foreach ($query->result() as $row) {
    $des = $row->harga;
}

//bulan indo
function bulan($bulan)
{
Switch ($bulan){
    case 1 : $bulan="Januari";
        Break;
    case 2 : $bulan="Februari";
        Break;
    case 3 : $bulan="Maret";
        Break;
    case 4 : $bulan="April";
        Break;
    case 5 : $bulan="Mei";
        Break;
    case 6 : $bulan="Juni";
        Break;
    case 7 : $bulan="Juli";
        Break;
    case 8 : $bulan="Agustus";
        Break;
    case 9 : $bulan="September";
        Break;
    case 10 : $bulan="Oktober";
        Break;
    case 11 : $bulan="November";
        Break;
    case 12 : $bulan="Desember";
        Break;
    }
return $bulan;
}

foreach ($jumlah_ru as $row) { 
    $ru = $row['banyak'];  
}


?>

<!-- Grafik -->
<section class="galeri">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4>Grafik Harga Bawang Merah 2020</h4>
                <hr>
            </div>
        </div>
        <!-- Chart -->
        <div class="chart-pie pt-4">
            <canvas id="myPieChart"></canvas>
        </div>
        <!-- tabel -->
        <div class="card shadow mt-5">
            <div class="card-header py-3">
                <center><h6 class="m-0 font-weight-bold text-primary">Perkiraan Harga Bulan <?= bulan($bulan)?> 2021</h6></center>
            </div>
            <div class="card-body">
                <?php if($ru != null) 
                    {
                        if($ru != 0){
                            $return = $ru*18;
                        }else{
                            $return = "Belum Ada data yang masuk untuk dasar perkiraan";
                        }
                ?>
                    <ul>
                        <li><b>Panen : </b></li>
                        <li>Perkiraan Panen pada bulan Desember 2021 : <?= $ru?> kwintal</li>
                        <?php
                            $wherePn="jumlah_panen < $ru";
                            $selectH="MIN(harga) as harga";

                            $this->db->select($selectH);
                            $this->db->where($wherePn);
                            $query = $this->db->get('harga_bawang');
                            $no = 1;
                            foreach ($query->result() as $row) {
                            ?>
                            <li>Dari data tersebut perkiraan harga bawang merah pada bulan ini adalah Rp.<?=$row->harga?></li>

                        <?php }?>
                    </ul>
                    
                <?php } else { ?>
                    <center><li><b>Masih Belum ada ada data untuk memperkirakan harga bawang merah bulan <?= bulan($bulan)?></li></center>
                <?php }?>
                
            </div>
        </div>
        <div class="card shadow mt-5">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Harga Bawang Merah 2020</h6>
                </div>
            <div class="card-body">
                <table id="dataTable" width="100%" cellspacing="0" class="table table-hover">
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Tanggal Panen</td>
                                <td>Harga</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $whereTh="year(tanggal_panen) = '2020'";
                            $selectB="monthname(tanggal_panen) as bulan, harga";

                            $this->db->select($selectB);
                            $this->db->where($whereTh);
                            $query = $this->db->get('harga_bawang');
                            $no = 1;
                            foreach ($query->result() as $row) {
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $row->bulan ?></td>
                                    <td><?= $row->harga ?></td>
                                </tr>
                            <?php
                                $no = $no + 1;
                            }
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
        <!-- IsiChart -->
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