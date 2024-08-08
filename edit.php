<?php 
//Edit Data 
//Koneksi Database

$koneksi=mysqli_connect("localhost","root","","db_minimarket_si7");

//Mengambil Parameter id pada link edit 
$kodebarang=$_GET['id'];

//menampilkan data yang akan di edit bersarkan kode barang 
$query=mysqli_query($koneksi,"SELECT * FROM tbl_barang WHERE kode_barang= '$kodebarang'");

while ($tampil=mysqli_fetch_array($query)) { ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Barang</title>
</head>
<body>
<center>
	<h2>Form Edit Barang</h2>
	<form method="POST">
		<table>
			<tr>
				<td width="100">Kode Barang</td>
				<td><input type="text" name="txt_kode" value="<?php echo $tampil["kode_barang"]; ?>"></td>
			</tr>
			<tr>
				<td width="100">Nama Barang</td>
				<td><input type="text" name="txt_nama" value="<?php echo $tampil["nama_barang"]; ?>"></td>
			</tr>
			<tr>
				<td width="100">Harga Barang</td>
				<td><input type="text" name="txt_harga" value="<?php echo $tampil["harga_barang"]; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="edit">Edit</button></td>
			</tr>
		</table>
	</form>
	<br>
	<a href="laporan.php">Lihat Data Barang</a>
</body>
</html>
<?php } ?>

<?php 
//Edit Data Barang yang telah diubah 
if (isset($_POST["edit"])){
	//ambil data yang baru di ubah
	$txtnama=$_POST['txt_nama'];
	$txtharga=$_POST['txt_harga'];

	//Query Edit data

	$queryedit="UPDATE tbl_barang SET 
			nama_barang='$txtnama',
			harga_barang='$txtharga'
			WHERE kode_barang= '$kodebarang' ";

	$edit=mysqli_query($koneksi,$queryedit);

	//pesan data berhasil di edit 
	if ($edit){
		echo "<script>
				alert('Data Berhasil di Edit');
				window.location.href='laporan.php';
			 </script>";
	}else {
		echo "<script>
				alert('Data Gagal di Edit');
				window.location.href='laporan.php';
			 </script>";
} 

}
 ?>