<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Barang</title>
</head>
<body>
<center>
	<h2>Laporan Data Barang</h2>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Harga Barang</th>
			<th>Aksi</th>
		</tr>
		
		<?php 
		//koneksi ke databese
		$koneksi=mysqli_connect("localhost","root","","db_minimarket_si7");

		//Panggil Data dari tabel barang(query select)
		$ambildata=mysqli_query($koneksi,"SELECT * FROM tbl_barang");

		//Tampilkan data 
		$no=1;
		while($tampil=mysqli_fetch_array($ambildata)){ ?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $tampil["kode_barang"]; ?></td>
			<td><?php echo $tampil["nama_barang"]; ?></td>
			<td><?php echo $tampil["harga_barang"]; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $tampil["kode_barang"]; ?>">Edit</a>|
				<a href="hapus.php?id=<?php echo $tampil["kode_barang"]; ?>">Hapus</a>
			</td>
		</tr>
		<?php $no++;} ?>
	</table>
	<br>
	<a href="form_barang.php">Kembali ke Form</a>
</body>
</html>