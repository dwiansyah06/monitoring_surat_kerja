<?php  
	include "confiq1.php";

	$id = $_GET['id_pegawai'];

	$hapus = mysqli_query($koneksi, "DELETE FROM tabel_data_pegawai WHERE id_pegawai ='$id' ");

	if ($hapus) {
		echo '<script>window.alert("Pegawai telah di hapus");window.location=("daftar-pegawai.php");</script>';	
	} else {
		echo '<script>window.alert("Pegawai gagal di hapus");window.location=("daftar-pegawai.php");</script>';
	}
?>