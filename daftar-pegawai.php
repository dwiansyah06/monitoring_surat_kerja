<?php 
    $judul = "Daftar Pegawai";

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
                <a class="navbar-brand" href="#">Data Pegawai</a>
            </div>
        </div>
    </nav>

<div class="content">
        <div class="row"> 
        <div class="col-md-12">
            <!-- <div style="margin-top: 15%;">
                <center>
                    <p>
                        Saat ini anda data pegawai yang anda masukan, Silahkan<br>
                        Klik tombol dibawah ini.
                    </p>
                    <a href="" class="btn btn-info btn-fill btn-wd" style="border-radius: 0"><span class="ti-plus"></span> Input Pegawai</a>
                </center>
            </div> -->
           <div class="card">
                <div class="content">
                    <a href="inputpegawai.php" class="btn btn-info btn-fill btn-wd" style="margin-bottom: 10px;"><span class="ti-plus"></span> Input Pegawai</a>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="font-size: 14px;font-weight: bold;">No.</th>
                                <th style="font-size: 14px;font-weight: bold;">Nama Pegawai</th>
                                <th style="font-size: 14px;font-weight: bold;">NIP</th>
                                <th style="font-size: 14px;font-weight: bold;">Jabatan</th>
                                <th style="font-size: 14px;font-weight: bold;">Pangkat</th>
                                <th style="font-size: 14px;font-weight: bold;">Golongan</th>
                                <th style="font-size: 14px;font-weight: bold;text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM tabel_data_pegawai");
                                while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['nama_pegawai']; ?></td>
                                <td><?php echo $row['NIP']; ?></td>
                                <td><?php echo $row['jabatan']; ?></td>
                                <td><?php echo $row['pangkat']; ?></td>
                                <td><?php echo $row['golongan']; ?></td>
                                <td style="width: 90px;">
                                    <a href="hapus-pegawai.php?id_pegawai=<?php echo $row['id_pegawai'] ?>" OnClick="return confirm('Yakin ingin menghapus ?');" class="btn btn-danger btn-fill" style="padding: 5px;border-radius: 0;"><span class="ti-trash"></span></a>
                                    
                                    <a href="edit-pegawai.php?id_pegawai=<?php echo $row['id_pegawai'] ?>" class="btn btn-success btn-fill" style="padding: 5px;border-radius: 0;"><span class="ti-pencil"></span></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php" ?>