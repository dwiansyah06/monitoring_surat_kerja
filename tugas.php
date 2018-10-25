<?php 
    $judul = "Daftar Tugas";

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
                <a class="navbar-brand" href="#">Tugas</a>
            </div>
        </div>
    </nav>
<div class="content">
    <?php  
        $query = mysqli_query($koneksi, "SELECT * FROM tabel_data_jadwal WHERE nama_pegawai = '$nama' ");
        if(mysqli_num_rows($query) != 0 ){
    ?>
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
                        <th style="font-size: 14px;font-weight: bold;text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                        $no = 1;
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
                                <a href="print.php?id_jadwal=<?php echo $row['id_jadwal'] ?>&nama_pegawai=<?php echo $row['nama_pegawai'] ?>" class="btn btn-info btn-fill btn-wd" style="padding: 5px;border-radius: 0;"><span class="ti-printer"></span> Print</a>
                            <?php } else { ?>
                            <span class="label label-success"><i class="ti-check"></i> Sudah di print</span>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php } else { ?>
    <div style="margin-top: 10%;">
        <center>
            <img src="assets/img/gatai.png" style="width: 20%;">
            <p>Maaf sepertinya belum ada file yang bisa anda download atau belum ada<br>
            Tugas yang diberikan kepada anda.</p>
        </center>
    </div>
    <?php } ?>
</div>

<?php include "footer.php" ?>