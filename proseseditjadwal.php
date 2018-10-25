<?php
//cek button    
    if (isset($_POST['kirim'])) {
		include("confiq1.php");
    $nama_pegawai  = $_POST['nama'];
    $jabatan       = $_POST['jabatan'];
    $tugas         = $_POST['tugas'];
    $taw           = $_POST['taw'];
    $tak           = $_POST['tak'];
    $sp            = $_POST['sp'];

    // echo "$nama_pegawai $jabatan $tugas $taw $tak";
     
    if ($nama_pegawai != '') {
        $q_nama = mysqli_query($koneksi, "UPDATE tabel_data_jadwal SET nama_pegawai = '$nama_pegawai' ");
    }
    if ($jabatan != '') {
        $q_jabatan = mysqli_query($koneksi, "UPDATE tabel_data_jadwal SET jabatan = '$jabatan' ");
    }
    if ($tugas != '') {
        $q_tugas = mysqli_query($koneksi, "UPDATE tabel_data_jadwal SET tugas = '$tugas' ");
    }
    if ($taw != '') {
        $q_awal = mysqli_query($koneksi, "UPDATE tabel_data_jadwal SET awal = '$taw' ");
    }
    if ($tak != '') {
        $q_akhir = mysqli_query($koneksi, "UPDATE tabel_data_jadwal SET akhir = '$tak' ");
    }
    if ($sp != '') {
        if ($sp == '0') {
           $q_print = mysqli_query($koneksi, "UPDATE tabel_data_jadwal SET status = '0' "); 
        } else {
            $q_print = mysqli_query($koneksi, "UPDATE tabel_data_jadwal SET status = '1' "); 
        }     
    }

    header("Location: daftar-jadwal.php");
    }

?>