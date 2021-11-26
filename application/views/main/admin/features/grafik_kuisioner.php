<?php
$sangatbaik = count(array($p1Sb)) + count(array($p2Sb)) + count(array($p3Sb)) + count(array($p4Sb)) + count(array($p5Sb)) + count(array($p6Sb)) + count(array($p7Sb)) + count(array($p8Sb)) + count(array($p9Sb));
$baik = count(array($p1B)) + count(array($p2B)) + count(array($p3B)) + count(array($p4B)) + count(array($p5B)) + count(array($p6B)) + count(array($p7B)) + count(array($p8B)) + count(array($p9B));
$kurangbaik = count(array($p1KB)) + count(array($p2KB)) + count(array($p3KB)) + count(array($p4KB)) + count(array($p5KB)) + count(array($p6KB)) + count(array($p7KB)) + count(array($p8KB)) + count(array($p9KB));
$tidakbaik = count(array($p1TB)) + count(array($p2TB)) + count(array($p3TB)) + count(array($p4TB)) + count(array($p5TB)) + count(array($p6TB)) + count(array($p7TB)) + count(array($p8TB)) + count(array($p9TB));
?>

<div class="container-fluid">
     <div class="row">
          <div class="col-lg-12 mb-4">
               <div class="card shadow mb-4">
                    <div class="card-header py-3">
                         <h6 class="m-0 font-weight-bold text-primary">Survey Tingkat Kepuasan Masyarakat</h6>
                    </div>
                    <div class="card-body">
                         <div class="chart-pie pt-4 mb-3">
                              <canvas id="myPieChart"></canvas>
                         </div>
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h6 class="font-weight-bold">1. Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</h6>
                              </div>
                              <h4 class="small">
                                   <p>Sangat Baik : <?= count(array($p1Sb)); ?></p>
                                   <p>Baik : <?= count(array($p1B)); ?></p>
                                   <p>Kurang Baik : <?= count(array($p1KB)); ?></p>
                                   <p>Tidak Baik : <?= count(array($p1TB)); ?></p>
                              </h4>
                         </div>
                         <br>
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h6 class="font-weight-bold">2. Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini?</h6>
                              </div>
                              <h4 class="small">
                                   <p>Sangat Baik : <?= count(array($p2Sb)); ?></p>
                                   <p>Baik : <?= count(array($p2B)); ?></p>
                                   <p>Kurang Baik : <?= count(array($p2KB)); ?></p>
                                   <p>Tidak Baik : <?= count(array($p2TB)); ?></p>
                              </h4>
                         </div>
                         <br>
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h6 class="font-weight-bold">3. Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan?</h6>
                              </div>
                              <h4 class="small">
                                   <p>Sangat Baik : <?= count(array($p3Sb)); ?></p>
                                   <p>Baik : <?= count(array($p3B)); ?></p>
                                   <p>Kurang Baik : <?= count(array($p3KB)); ?></p>
                                   <p>Tidak Baik : <?= count(array($p3TB)); ?></p>
                              </h4>
                         </div>
                         <br>
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h6 class="font-weight-bold">4. Bagaimana pendapat saudara tentang penanganan pengaduan pengguna layanan?</h6>
                              </div>
                              <h4 class="small">
                                   <p>Sangat Baik : <?= count(array($p4Sb)); ?></p>
                                   <p>Baik : <?= count(array($p4B)); ?></p>
                                   <p>Kurang Baik : <?= count(array($p4KB)); ?></p>
                                   <p>Tidak Baik : <?= count(array($p4TB)); ?></p>
                              </h4>
                         </div>
                         <br>
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h6 class="font-weight-bold">5. Bagaimana pendapat saudara tentang kesesuaian pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?</h6>
                              </div>
                              <h4 class="small">
                                   <p>Sangat Baik : <?= count(array($p5Sb)); ?></p>
                                   <p>Baik : <?= count(array($p5B)); ?></p>
                                   <p>Kurang Baik : <?= count(array($p5KB)); ?></p>
                                   <p>Tidak Baik : <?= count(array($p5TB)); ?></p>
                              </h4>
                         </div>
                         <br>
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h6 class="font-weight-bold">6. Bagaimana pendapat saudara tentang kompetens/ kemampuan petugas pelayanan?</h6>
                              </div>
                              <h4 class="small">
                                   <p>Sangat Baik : <?= count(array($p6Sb)); ?></p>
                                   <p>Baik : <?= count(array($p6B)); ?></p>
                                   <p>Kurang Baik : <?= count(array($p6KB)); ?></p>
                                   <p>Tidak Baik : <?= count(array($p6TB)); ?></p>
                              </h4>
                         </div>
                         <br>
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h6 class="font-weight-bold">7. Bagaimana pendapat saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?</h6>
                              </div>
                              <h4 class="small">
                                   <p>Sangat Baik : <?= count(array($p7Sb)); ?></p>
                                   <p>Baik : <?= count(array($p7B)); ?></p>
                                   <p>Kurang Baik : <?= count(array($p7KB)); ?></p>
                                   <p>Tidak Baik : <?= count(array($p7TB)); ?></p>
                              </h4>
                         </div>
                         <br>
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h6 class="font-weight-bold">8. Bagaimana pendapat saudara tentang kualitas sarana dan prasarana?</h6>
                              </div>
                              <h4 class="small">
                                   <p>Sangat Baik : <?= count(array($p8Sb)); ?></p>
                                   <p>Baik : <?= count(array($p8B)); ?></p>
                                   <p>Kurang Baik : <?= count(array($p8KB)); ?></p>
                                   <p>Tidak Baik : <?= count(array($p8TB)); ?></p>
                              </h4>
                         </div>
                         <br>
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h6 class="font-weight-bold">9. Bagaimana pendapat saudara tentang penerapan Protokol Kesehatan dalam penanganan Covid-19?</h6>
                              </div>
                              <h4 class="small">
                                   <p>Sangat Baik : <?= count(array($p9Sb)); ?></p>
                                   <p>Baik : <?= count(array($p9B)); ?></p>
                                   <p>Kurang Baik : <?= count(array($p9KB)); ?></p>
                                   <p>Tidak Baik : <?= count(array($p9TB)); ?></p>
                              </h4>
                         </div>
                    </div>
               </div>
          </div>
     </div>
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
               labels: ["Sangat Baik", "Baik", "Tidak Baik", "Kurang Baik"],
               datasets: [{
                    data: [<?= $sangatbaik ?>, <?= $baik ?>, <?= $kurangbaik ?>, <?= $tidakbaik ?>],
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