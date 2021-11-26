<!-- berita -->
<section class="berita" id="berita">
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h4>Panduan Pengajuan Surat</h4>
                <hr>
                <center>
                <img src="<?= base_url(); ?>/assets/img/user/step.jpeg" alt="gambar berita.." class="card-img-top" style="height:400px; width:750px"/>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <h4>Berita</h4>
            </div>
            <div class="col-sm-2">
                <?php
                if ($this->session->userdata('nik') != null) {
                ?>
                    <a href="<?= base_url('user/tambah_berita') ?>" class="btn btn-success">Tambah Data</a>
                <?php
                }
                ?>
            </div>
            <div class="col-sm-12">
                <hr />
            </div>
        </div>
        <div class="row">
            <?php
            $no = 1;
            $query = $this->db->get_where('umum_puskomin', array('level' => 'Biasa'));
            foreach ($query->result() as $row) {
                $tmp = (str_word_count($row->isi) > 20 ? substr($row->isi, 0, 100) . ".." : $row->isi);
            ?>
                <div class="col-sm-4">
                    <div class="card mb-3">
                        <img src="<?= base_url(); ?>/uploads/img/puskomin/<?= $row->gambar ?>" alt="gambar berita.." class="card-img-top" />
                        <div class="card-body">
                            <h5 class="card-title"><?= $row->judul ?> </h5>
                            <p class="card-text"><?= $tmp ?></p>
                            <p class="card-text"><small class="text-muted"><?= $row->alamat ?> | <?= $row->dibuat_pada ?></small></p>
                            <a href="<?= base_url('user/lihat_puskomin?id=' . $row->id) ?>" class="btn btn-success">Lihat</a>
                        </div>
                    </div>
                </div>
            <?php
                $no = $no + 1;
                if ($no > 6) {
                    break;
                }
            }
            ?>
        </div>
</section>
<!-- akhir berita -->

<!-- galeri -->
<section class="galeri">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4>Galeri</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <?php
                    $no = 1;
                    $query = $this->db->get_where('umum_puskomin', array('level' => 'Biasa'));
                    foreach ($query->result() as $row) {
                        if($no < 7){
                        
                    ?>
                    <div class="col-sm-4">
                        <a href="#" class="d-block mb-4 h-100">
                            <img src="<?= base_url(); ?>/uploads/img/puskomin/<?= $row->gambar ?>" alt="" class="img-fluid img-thumbnail" style="height:180px">
                        </a>
                    </div>
                    <?php
                        $no++;
                        }
                    }
                    ?>
                </div>
            </div>

            <!-- twitter -->
            <div class="col-sm-4" id="twitter">
                <div class="card">
                    <div class="card-body">
                        <a class="twitter-timeline" data-width="400" data-height="315" data-dnt="true" data-theme="light" href="https://twitter.com/kesbangkabmlg?ref_src=twsrc%5Etfw">Tweets by kesbangkabmlg</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- akhir galeri -->