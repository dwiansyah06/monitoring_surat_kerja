<?php
//cek button    
    if (isset($_POST['kirim'])) {
		include("confiq1.php");
    $id_pegawai     = $_POST['id_pegawai'];
    $nama_pegawai   = $_POST['nama'];
    $nip            = $_POST['nip'];
    $jabatan        = $_POST['jabatan'];
    $pangkat        = $_POST['pangkat'];
    $golongan       = $_POST['golongan'];

    // echo "$nama_pegawai $jabatan $tugas $taw $tak";
     
    if ($nama_pegawai != '') {
        $q_nama = mysqli_query($koneksi, "UPDATE tabel_data_pegawai SET nama_pegawai = '$nama_pegawai' WHERE id_pegawai = '$id_pegawai' ");
    }
    if ($nip != '') {
        $q_nip = mysqli_query($koneksi, "UPDATE tabel_data_pegawai SET NIP = '$nip' WHERE id_pegawai = '$id_pegawai' ");
    }
    if ($jabatan != '') {
        $q_jabatan = mysqli_query($koneksi, "UPDATE tabel_data_pegawai SET jabatan = '$jabatan' WHERE id_pegawai = '$id_pegawai' ");
    }
    if ($pangkat != '') {
        $q_pangkat = mysqli_query($koneksi, "UPDATE tabel_data_pegawai SET pangkat = '$pangkat' WHERE id_pegawai = '$id_pegawai' ");
    }
    if ($golongan != '') {
        $q_golongan = mysqli_query($koneksi, "UPDATE tabel_data_pegawai SET golongan = '$golongan' WHERE id_pegawai = '$id_pegawai' ");
    }

    header("Location: daftar-pegawai.php");
    }

?>