<?php 
    $judul = "Jadwal Tugas";

    include "header.php" 
?>
<div class="main-panel">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="#">Jadwal Tugas</a>
            </div>
        </div>
    </nav>
<div class="content">
    <!-- <div style="margin-top: 10%;">
        <center>
            <img src="assets/img/gatai.png" style="width: 20%;">
            <p>Maaf sepertinya belum ada file yang bisa anda download atau belum ada<br>
            Tugas yang diberikan kepada anda.</p>
        </center>
    </div> -->
    
    <div class="card">
        <div class="content">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style="font-size: 14px;font-weight: bold;">No.</th>
                        <th style="font-size: 14px;font-weight: bold;">Nama Pegawai</th>
                        <th style="font-size: 14px;font-weight: bold;">Jabatan</th>
                        <th style="font-size: 14px;font-weight: bold;">Tugas</th>
                        <th style="font-size: 14px;font-weight: bold;">Tanggal Awal</th>
                        <th style="font-size: 14px;font-weight: bold;">Tanggal Akhir</th>
                        <th style="font-size: 14px;font-weight: bold;text-align: center;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM tabel_data_jadwal ");
                        while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama_pegawai']; ?></td>
                        <td><?php echo $row['jabatan']; ?></td>
                        <td><?php echo $row['tugas']; ?></td>
                        <td><?php echo $row['awal']; ?></td>
                        <td><?php echo $row['akhir']; ?></td>
                        <td style="width: 90px;">
                            <?php if($row['status'] == 0){ ?>
                                <span class="label label-danger"><i class="ti-time"></i> Belum di print</span>
                            <?php } else { ?>
                                <span class="label label-info"><i class="ti-check"></i> Sudah di print</span>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "footer.php" ?>