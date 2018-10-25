<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_ = "data_pegawai";
 
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_);
 
if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}else{
	
}
?>