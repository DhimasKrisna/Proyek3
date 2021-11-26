<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Detail Penelitian</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Penelitian</h6>
        </div>
        <div class="card-body">
            <?php
            $no = 1;
            $id = $this->input->get('id');
            $this->db->where('id', $id);
            $query = $this->db->get('penelitian');
            foreach ($query->result() as $row) {
            ?>
                <form action="<?= base_url('admin/proses_balas_penelitian?id=' . $row->id) ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">NIK</label>
                        <input type="text" name="nik" id="nik" value="<?= $row->NIK ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" id="nama" value="<?= $row->nama_lengkap ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Instansi</label>
                        <input type="text" name="instansi" id="instansi" value="<?= $row->instansi ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" id="alamat" value="<?= $row->alamat ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Perihal</label>
                        <input type="text" name="perihal" id="perihal" value="<?= $row->perihal ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tembusan</label>
                        <input type="text" name="tembusan" id="tembusan" value="<?= $row->tembusan_surat ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Komentar</label>
                        <input type="text" name="komentar" id="komentar" placeholder="Masukkan komentar" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Balasan</label>
                        <input type="file" name="surat_balasan" id="surat_balasan" value="<?= $row->perihal ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Status Surat</label>
                        <select name="status_surat" id="status_surat" class="form-control">
                            <option>Diajukan</option>
                            <option>Diproses</option>
                            <option>Selesai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            <?php
                $no = $no + 1;
            }
            ?>
        </div>
    </div>
</div>