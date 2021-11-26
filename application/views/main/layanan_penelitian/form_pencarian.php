<div class="container">
  <h4>Panduan Pengajuan Surat</h4>
  <hr>
  <form action="<?php echo base_url('layanan/hasil_cari') ?>" action="POST">
    <div class="mb-3">
      <label for="cari">Masukkan NIP/NIM/NIK</label>
      <input type="text" class="form-control" name="cari" aria-describedby="cari">
    </div>
    <button type="submit" class="btn btn-primary" value="Cari">Submit</button>
  </form>
</div>