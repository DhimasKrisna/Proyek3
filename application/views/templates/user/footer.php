<!-- footer -->
</div>
<div id="blank-zone"></div>
<footer id="footer">
    <div class="container">
        <div id="content" class="row">
            <div class="col-sm-4 d-none d-sm-none d-md-block">
                <h5><i class="fas fa-briefcase"></i> Tentang Kami</h5>
                <hr>
                <p>Berikut ini adalah website Badan Kesatuan Bangsa dan Politik Kabupaten Malang yang saat ini berada dalam tahap pengembangan</p>
            </div>
            <div class="col-sm-4 d-none d-sm-none d-md-block">
                <h5><i class="far fa-newspaper"></i> Berita Terkini</h5>
                <hr>
                <ul id="berita-footer">
                    <?php
                    $no = 1;
                    $this->db->where('level', 'biasa');
                    $query =  $this->db->get('umum_puskomin');

                    foreach ($query->result() as $row) {
                    ?>
                        <li></li>
                    <?php
                        $no = $no + 1;
                        if ($no > 6) {
                            break;
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="col-sm-4 d-none d-sm-none d-md-block">
                <h5><i class="fas fa-map-marker-alt"> </i> Alamat</h5>
                <hr>
                <ul id="alamat-footer">
                    <li>Jalan K. Haji Agus Salim No. 7</li>
                    <li>Klojen, Kiduldalem, Kec. Klojen</li>
                    <li>Kota Malang, Jawa Timur</li>
                    <li>65118</li>
                </ul>
            </div>
        </div>
        <hr>
        <div id="copyright" class="row">
            <div class="col-sm-12">
                <p>&copy;copyright 2020 | Build with passion <br>by <a href="<?= base_url('main/login') ?>">I.D.D.L</a></a></p>
            </div>
        </div>
    </div>
</footer>
<!-- akhir footer -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= base_url('') ?>assets/js/bootstrap.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/vendor/admin/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/admin/datatables/dataTables.bootstrap4.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url() ?>assets/js/admin/demo/datatables-demo.js"></script>
</body>

</html>