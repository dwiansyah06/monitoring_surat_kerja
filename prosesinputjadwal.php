<?php
//cek button    
    if (isset($_POST['kirim'])) {
		include("confiq1.php");
    $nama_pegawai  = $_POST['nama'];
    $jabatan       = $_POST['jabatan'];
    $tugas         = $_POST['tugas'];
    $taw           = $_POST['taw'];
    $tak           = $_POST['tak'];

    $kirim = mysqli_query($koneksi, "INSERT INTO tabel_data_jadwal (nama_pegawai,jabatan,tugas,awal,akhir) VALUES ('$nama_pegawai','$jabatan','$tugas','$taw', '$tak')");

    if ($kirim) {
        header("Location: daftar-jadwal.php");
    }
    
	// $input    ="INSERT INTO tabel_data_jadwal (id_jadwal,nama_pegawai,jabatan,tugas,waktu_pelaksanaan) VALUES (NULL,'$nama_pegawai','$jabatan','$tugas','$waktu_pelaksanaan')";
 //    $query_input =mysqli_query($koneksi,$input);
	
 //    if ($query_input) {
 //    //Jika Sukses
 //    ?>
 //    <?php
 //    }
 //    else {
 //    //Jika Gagal
 //    echo "Input Jadwal Gagal!, Silahkan diulangi!";
 //    }

    }

?>