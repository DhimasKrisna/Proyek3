  <!-- berita -->
  <section class="berita" id="berita">
      <div class="container-fluid">
          <div class="row">
              <?php
                foreach ($puskomin as $row) {
                ?>
                  <div class="col-sm-9">
                      <div class="card mb-3">
                          <img src="<?= base_url(); ?>/uploads/img/puskomin/<?= $row['gambar']; ?>" alt="gambar berita.." class="card-img-top" width="100%" height="500px" />
                          <div class="card-body">
                              <h5 class="card-title">Kepada - <?= $row['ditujukan']; ?></h5>
                              <p class="card-text"><?= $row['isi']; ?></p>
                              <p class="card-text">Bertempat pada Kecamatan : <?= $row['alamat']; ?></p>
                              <br><br>
                              <p class="card-text">Ditulis oleh : <?= $row['jabatan']; ?> - <?= $row['nama']; ?></p>
                              <p class="card-text">Tempat : <?= $row['lokasi']; ?></p>
                              <p class="card-text"><small class="text-muted"><?= $row['alamat']; ?> | <?= $row['lokasi']; ?></small></p>
                          </div>
                      </div>
                  </div>
              <?php
                }
                ?>

              <div class="col-sm-3" id="twitter">
                  <div class="card">
                      <div class="card-body">
                          <a class="twitter-timeline" data-width="400" data-height="400" data-dnt="true" data-theme="light" href="https://twitter.com/kesbangkabmlg?ref_src=twsrc%5Etfw">Tweets by kesbangkabmlg</a>
                          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- akhir berita -->

  <!-- galeri -->
  <section class="galeri">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-12">
                  <h4>Galeri</h4>
                  <hr>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-8">
                  <div class="row">
                      <div class="col-sm-4">
                          <a href="#" class="d-block mb-4 h-100">
                              <img src="<?= base_url('') ?>assets/img/galeri/ss1.png" alt="" class="img-fluid img-thumbnail">
                          </a>
                      </div>
                      <div class="col-sm-4">
                          <a href="#" class="d-block mb-4 h-100">
                              <img src="<?= base_url('') ?>assets/img/galeri/ss2.png" alt="" class="img-fluid img-thumbnail">
                          </a>
                      </div>
                      <div class="col-sm-4">
                          <a href="#" class="d-block mb-4 h-100">
                              <img src="<?= base_url('') ?>assets/img/galeri/ss1.png" alt="" class="img-fluid img-thumbnail">
                          </a>
                      </div>
                      <div class="col-sm-4">
                          <a href="#" class="d-block mb-4 h-100">
                              <img src="<?= base_url('') ?>assets/img/galeri/ss2.png" alt="" class="img-fluid img-thumbnail">
                          </a>
                      </div>
                      <div class="col-sm-4">
                          <a href="#" class="d-block mb-4 h-100">
                              <img src="<?= base_url('') ?>assets/img/galeri/ss1.png" alt="" class="img-fluid img-thumbnail">
                          </a>
                      </div>
                      <div class="col-sm-4">
                          <a href="#" class="d-block mb-4 h-100">
                              <img src="<?= base_url('') ?>assets/img/galeri/ss2.png" alt="" class="img-fluid img-thumbnail">
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- akhir galeri -->