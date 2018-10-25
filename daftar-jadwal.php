<?php 
    $judul = "Daftar Jadwal";

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
                <a class="navbar-brand" href="#">Jadwal Tugas Pegawai</a>
            </div>
        </div>
    </nav>
<div class="content">
    <div class="row"> 
        <div class="col-md-12">
            <?php 
                $query = mysqli_query($koneksi, "SELECT * FROM tabel_data_jadwal");
                if(mysqli_num_rows($query) != 0){ 
            ?>
            <div class="card">
                <div class="content">
                    <a href="inputjadwal.php" class="btn btn-info btn-fill btn-wd" style="margin-bottom: 10px;"><span class="ti-plus"></span> Input Jadwal</a>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="font-size: 14px;font-weight: bold;">No.</th>
                                <th style="font-size: 14px;font-weight: bold;">Nama Pegawai</th>
                                <th style="font-size: 14px;font-weight: bold;">Jabatan</th>
                                <th style="font-size: 14px;font-weight: bold;">Tugas</th>
                                <th style="font-size: 14px;font-weight: bold;">Tanggal Awal</th>
                                <th style="font-size: 14px;font-weight: bold;">Tanggal Akhir</th>
                                <th style="font-size: 14px;font-weight: bold;">Status Print</th>
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
                                <td>
                                    <?php if($row['status'] == 0){ ?>
                                        <span class="label label-info"><i class="ti-time"></i> Belum di print</span>
                                    <?php } else { ?>
                                        <span class="label label-success"><i class="ti-check"></i> Sudah di print</span>
                                    <?php } ?>
                                </td>
                                <td style="width: 90px;">
                                    <a href="hapus-jadwal.php?id_jadwal=<?php echo $row['id_jadwal'] ?>" OnClick="return confirm('Yakin ingin menghapus ?');" class="btn btn-danger btn-fill" style="padding: 5px;border-radius: 0;"><span class="ti-trash"></span></a>
                                    
                                    <a href="edit-jadwal.php?id_jadwal=<?php echo $row['id_jadwal'] ?>" class="btn btn-success btn-fill" style="padding: 5px;border-radius: 0;"><span class="ti-pencil"></span></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php }else { ?>
            <div style="margin-top: 15%;">
                <center>
                    <p>
                        Saat ini anda belum menginput data tugas untuk pegawai, Silahkan<br>
                        Klik tombol dibawah ini.
                    </p>
                    <a href="inputjadwal.php" class="btn btn-info btn-fill btn-wd" style="border-radius: 0"><span class="ti-plus"></span> Input Jadwal</a>
                </center>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include "footer.php" ?>