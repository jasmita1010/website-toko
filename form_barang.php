<?php 
//Query koneksi Database
$koneksi=mysqli_connect("localhost","root","","db_minimarket_si7");

//klik tombol simpam
if (isset($_POST["simpan"])){
	//Ambil data dari tiap elemen yang ada didalam form
	$txtkode= $_POST["txt_kode"];
	$txtnama=$_POST["txt_nama"];
	$txtharga=$_POST["txt_harga"];

	//Query insert data ke dalam tabel barang
	$query= "INSERT INTO tbl_barang values ('$txtkode','$txtnama','$txtharga')";

	//Query proses simpan 
	$simpan=mysqli_query($koneksi,$query);

	//PESAN DATA BERHASIL DISIMPAN
	if($simpan){
			echo"<script>
			alert('Data Berhasil Disimpan');
			</script>";
		}else{
			echo"<script>
			alert('Data Gagal Disimpan');
			</script>";
		}

}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Entry Barang</title>
</head>
<body>
<center>
	<h2>Form Entry Barang</h2>
	<form method="POST">
		<table>
			<tr>
				<td width="100">Kode Barang</td>
				<td><input type="text" name="txt_kode"></td>
			</tr>
			<tr>
				<td width="100">Nama Barang</td>
				<td><input type="text" name="txt_nama"></td>
			</tr>
			<tr>
				<td width="100">Harga Barang</td>
				<td><input type="text" name="txt_harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="simpan">simpan</button></td>
			</tr>
		</table>
	</form>
	<br>
	<a href="laporan.php">Lihat Data Barang</a>
</body>
</html>

