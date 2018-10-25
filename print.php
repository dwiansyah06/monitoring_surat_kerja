<?php
    session_start();
    $id = $_GET['id_jadwal'];
    $nama = $_GET['nama_pegawai'];
    include "confiq1.php";
    $update = mysqli_query($koneksi, "UPDATE tabel_data_jadwal SET status = '1' WHERE nama_pegawai = '$nama' AND id_jadwal = '$id' ");

    $query = mysqli_query($koneksi, "SELECT * FROM tabel_data_jadwal WHERE nama_pegawai = '$nama' AND id_jadwal = '$id' ");
    $row = mysqli_fetch_assoc($query);
    $nama_pegawai = $row['nama_pegawai'];
    $jabatan = $row['jabatan'];
    $tugas = $row['tugas'];
    $awal = $row['awal'];
    $akhir = $row['akhir'];
    $tanggal = date('d F Y');

    $content = '
        <style type="text/css">
            .container{padding: 40 20 40 20;}
            .tabel{border-collapse: collapse;margin-left: 25px;}
            .tabel th{padding: 8px 5px;}
            .tabel td{padding-left: 5px;}
            .garis{margin-top: 25px;}
            .judul{text-align:center; margin-top: 15px; font-weight: 300;}
        </style>
    ';
    $content .= '
        <page>
            <div class="container">
                <img src="assets/img/LOGO-PRINT.png"; style="width: 50%;"/>
                <h3 style="text-align: center;">SURAT TUGAS</h3>
                <p>Yang bertanda tangan dibawah ini:</p>
                <h4 style="text-align: center">KEPALA BADAN PUSAT STATISTIK <br> KOTA PALEMBANG</h4>
                <p style="margin-top: 30px"> Memberi tugas kepada : </p>
                <p> Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$nama_pegawai.'</p>

                <p> Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$jabatan.'</p>

                <p> Anggota &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: - </p>

                <p> Tugas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </p>
                <p style="margin-left: 140px;margin-top: -27px;text-align: justify">'.$tugas.'</p>

                <p> Waktu Pelaksanaan &nbsp;&nbsp;: '.$awal.' s/d '.$akhir.'</p>
                <br><br>
                <p style="text-align: right;margin-bottom: 2px">Palembang, '.$tanggal.'</p>
                <p style="text-align: right;margin-top: 0;margin-bottom: 2px">Kepala Badan Pusat Statistik</p>
                <p style="text-align: right;margin-top: 0;margin-right: 30px;">Kota Palembang</p><br><br><br><br>
                <p style="text-align: right;margin-top: 0;margin-bottom: 2px">Ir. Taupiq Hidayat Nr, M.M</p>
                <p style="text-align: right;margin-top: 0;">NIP 196804121994021001</p>
            </div>
        </page>
                ';

    require_once('assets/plugin/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('p','A4','en');
    $html2pdf->writeHTML($content);
    $html2pdf->output('tugas.pdf');
?>