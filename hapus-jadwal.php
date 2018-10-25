<?php  
	include "confiq1.php";

	$id = $_GET['id_jadwal'];

	$hapus = mysqli_query($koneksi, "DELETE FROM tabel_data_jadwal WHERE id_jadwal ='$id' ");

	if ($hapus) {
		echo '<script>window.alert("Jadwal telah di hapus");window.location=("daftar-jadwal.php");</script>';	
	} else {
		echo '<script>window.alert("Jadwal gagal di hapus");window.location=("daftar-jadwal.php");</script>';
	}
?>