<?php 
//Koneksi ke Database
	
$koneksi=mysqli_connect("localhost","root","","db_minimarket_si7");

//Mengambil Parameter id pada link hapus 
$kodebarang=$_GET['id'];

//Query Hapus Berdasarkan Kode Barang
$hapus=mysqli_query($koneksi,"DELETE FROM tbl_barang WHERE kode_barang= '$kodebarang'");

//Pesan Data BErhasil dihapus
if ($hapus){
		echo "<script>
				alert('Data Berhasil di Hapus');
				window.location.href='laporan.php';
			 </script>";
}else {
		echo "<script>
				alert('Data Gagal di Hapus');
				window.location.href='laporan.php';
			 </script>";
} 



 ?>