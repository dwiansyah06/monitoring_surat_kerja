<?php
	if(isset($_POST['login'])){
		include("confiq1.php");
		session_start();
		$nip	= $_POST['nip'];
		$password	= $_POST['jabatan'];
		
		$query = mysqli_query($koneksi, "SELECT * FROM user WHERE nip = '$nip' AND jabatan = '$password'");

		if(mysqli_num_rows($query) == 0){
			echo '<script>window.alert("Maaf data yang dimasukan tidak sesuai");window.location=("login.php");</script>';
		}else{
			$row = mysqli_fetch_assoc($query);	
			$_SESSION['jabatan'] = $row['jabatan'];
			$_SESSION['nip'] = $row['nip'];
			$_SESSION['id_user'] = $row['id_user'];
			header("Location: index.php");
			// if($row['jabatan'] == 'Kepala Kantor'){
			// 	$_SESSION['jabatan'] = $row['jabatan'];
			// 	header("location:template.php");
			// }else {
			// 	echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
			// }
		}
	}
?>