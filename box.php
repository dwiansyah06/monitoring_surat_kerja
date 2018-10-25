<div class="row">
<?php if($jabatan == 'admin'){ 
    //jumlah pegawai
    $q_pegawai = mysqli_query($koneksi, "SELECT * FROM tabel_data_pegawai WHERE jabatan = 'pegawai' ");
    $row = mysqli_num_rows($q_pegawai);

    //surat yang dikeluarkan
    $q_sbp = mysqli_query($koneksi, "SELECT * FROM tabel_data_jadwal");
    $sbp = mysqli_num_rows($q_sbp);

    //Jumlah pengguna
    $q_user = mysqli_query($koneksi, "SELECT * FROM tabel_data_pegawai");
    $row_user = mysqli_num_rows($q_user);
?>
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="ti-user"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Pegawai</p>
                            <?php echo $row; ?>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-reload"></i> Updated now
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-success text-center">
                            <i class="ti-email"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Surat Keluar</p>
                            <?php echo $sbp; ?>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-calendar"></i> Last day
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-danger text-center">
                            <i class="ti-user"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>User</p>
                            <?php echo $row_user; ?>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-timer"></i> In the last hour
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } elseif ($jabatan == 'pegawai') { 
    //nama pegawai
    $q_nama = mysqli_query($koneksi, "SELECT nama_pegawai FROM tabel_data_pegawai WHERE id_pegawai = '$id_pgw' ");
    $row = mysqli_fetch_assoc($q_nama);

    //surat belum di print
    $q_sbp = mysqli_query($koneksi, "SELECT * FROM tabel_data_jadwal WHERE nama_pegawai = '$row[nama_pegawai]' AND status = '0' ");
    $sbp = mysqli_num_rows($q_sbp);

    //surat sudah di print
    $q_sdp = mysqli_query($koneksi, "SELECT * FROM tabel_data_jadwal WHERE nama_pegawai = '$row[nama_pegawai]' AND status = '1' ");
    $sdp = mysqli_num_rows($q_sdp);
?>

    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="ti-user"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Nama Pegawai</p>
                            <?php echo $row['nama_pegawai'] ?>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-reload"></i> Updated now
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-success text-center">
                            <i class="ti-email"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Surat Belum di print</p>
                            <?php echo $sbp; ?>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-calendar"></i> Last day
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-danger text-center">
                            <i class="ti-email"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Surat sudah di print</p>
                            <?php echo $sdp; ?>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-timer"></i> In the last hour
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } elseif ($jabatan == 'Kepala Kantor') { 
    //nama pegawai
    $q_nama = mysqli_query($koneksi, "SELECT nama_pegawai FROM tabel_data_pegawai WHERE id_pegawai = '$id_pgw' ");
    $row = mysqli_fetch_assoc($q_nama);

    //surat belum di print
    $q_sbp = mysqli_query($koneksi, "SELECT * FROM tabel_data_jadwal WHERE status = '0' ");
    $sbp = mysqli_num_rows($q_sbp);

    //surat sudah di print
    $q_sdp = mysqli_query($koneksi, "SELECT * FROM tabel_data_jadwal WHERE status = '1' ");
    $sdp = mysqli_num_rows($q_sdp);
?>
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="ti-user"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Nama </p>
                            <p style="font-size: 14px;font-weight: bold;"><?php echo $row['nama_pegawai'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-reload"></i> Updated now
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-success text-center">
                            <i class="ti-email"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Surat Belum di print</p>
                            <?php echo $sbp; ?>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-calendar"></i> Last day
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-danger text-center">
                            <i class="ti-email"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Surat sudah di print</p>
                            <?php echo $sdp; ?>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-timer"></i> In the last hour
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</div>