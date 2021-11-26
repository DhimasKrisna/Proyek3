<!DOCTYPE html>
<html>
<head>
	<title>CETAK LAPORAN HARIAN</title>
</head>
<body>

	<center>

		<h2>DATA LAPORAN HARIAN</h2>
		<h4>BAKESBANGPOL KABUPATEN MALANG</h4>

	</center>

    

	<table border="1" style="width: 100%">
		<!-- <tr>
			<th width="1%">No</th>
			<th>Tanggal</th>
			<th>Nama Barang</th>
			<th width="5%">Jumlah</th>
		</tr> -->
        <tr>
                <th>No. </th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Lokasi</th>
                <th>Kecamatan</th>
                <th>Isi</th>
                <td>Tingkat</td>
        </tr>
		
        <?php
            $no = 1;
            $query = $this->db->get('umum_puskomin');
            foreach ($query->result() as $row) {
        ?>
		<tr>
            <td><?= $no++ ?></td>
            <td><?= $row->nama ?></td>
            <td><?= $row->judul ?></td>
            <td><?= $row->lokasi ?></td>
            <td><?= $row->alamat ?></td>
            <td><?= $row->isi ?></td>
            <td><?= $row->level ?></td>
        </tr>
		<?php 
		}
		?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>