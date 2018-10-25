<?php
	session_start();
    include "confiq1.php";
    
    $nip = $_SESSION['nip'];
    $query_getData = mysqli_query($koneksi, "SELECT * FROM tabel_data_pegawai WHERE NIP = '$nip' ");
    $getting = mysqli_fetch_assoc($query_getData);
    //ambil data
    $_SESSION['id_pegawai'] = $getting['id_pegawai'];
    $_SESSION['nama'] = $getting['nama_pegawai'];
    $_SESSION['jabatan'] = $getting['jabatan'];

    //Simpan data mengggunakan session
    $nama = $_SESSION['nama'];
    $id_pgw = $_SESSION['id_pegawai'];
    $jabatan = $_SESSION['jabatan'];
	
    if(!isset($nip)){
	   header("location:login.php");
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/bps.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>BPS || <?php echo "$judul"; ?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    BPS Palembang
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="index.php">
                        <i class="ti-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				<?php if ($jabatan == 'Kepala Kantor') { ?>
				<li>
                    <a href="jdwl-tugas.php">
                        <i class="ti-agenda"></i>
                        <p>Jadwal Tugas Pegawai</p>
                    </a>
                </li>

                <?php } else if ($jabatan == 'admin') { ?>

                <li>
                    <a href="daftar-jadwal.php">
                        <i class="ti-calendar"></i>
                        <p>Jadwal</p>
                    </a>
                </li>
                <li>
                    <a href="daftar-pegawai.php">
                        <i class="ti-user"></i>
                        <p>Pegawai</p>
                    </a>
                </li>
                <?php } else if ($jabatan == 'pegawai') { ?>

				<li>
                    <a href="tugas.php">
                        <i class="ti-agenda"></i>
                        <p>Tugas</p>
                    </a>
                </li>
				<?php } else if ($jabatan == 'Kassubag Tata Usaha') { ?>
				
				<li>
                    <a href="dashboard.html">
                        <i class="ti-pie-chart"></i>
                        <p>Pengaturan Kassubag Tata Usaha </p>
                    </a>
                </li>
				
				<?php } ?>
				<li>
                    <a href="logout.php">
                        <i class="ti-close"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>