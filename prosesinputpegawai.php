<?php
//cek button    
    if (isset($_POST['kirim'])) {
		include("confiq1.php");
    $nama           = $_POST['nama'];
    $NIP            = $_POST['nip'];
    $jabatan        = $_POST['jabatan'];
    $pangkat        = $_POST['pangkat'];
    $golongan       = $_POST['golongan'];

    $kirim = mysqli_query($koneksi, "INSERT INTO tabel_data_pegawai (nama_pegawai, NIP, jabatan, pangkat, golongan) VALUES ('$nama','$NIP','$jabatan','$pangkat','$golongan')");

    if ($kirim) {
        $kirim_user = mysqli_query($koneksi, "INSERT INTO user (nip,jabatan) VALUES ('$NIP', '$jabatan') ");
        header("Location: daftar-pegawai.php");
    }

    }
?>