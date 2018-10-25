<?php 
    $judul = "Input Jadwal";

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
                <a class="navbar-brand" href="#">Input Jadwal Tugas Pegawai</a>
            </div>
        </div>
    </nav>
<div class="content">
    <div class="card">
        <div class="header">
            <h4 class="title">Data Jadwal</h4>
        </div>
        <div class="content">
            <form action="prosesinputjadwal.php" method="post">
                <div class="row">
                    <div class="col-md-2">
                        <label>Nama Pegawai</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <select name="nama" class="form-control border-input" id="nama_pegawai">
                            <option>Pilih Nama</option>
                            <?php  
                                $nama_pegawai = mysqli_query($koneksi, "SELECT nama_pegawai FROM tabel_data_pegawai");
                                while ($row = mysqli_fetch_assoc($nama_pegawai)) {
                            ?>
                            <option value="<?php echo $row['nama_pegawai'] ?>"><?php echo $row['nama_pegawai']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="jabatan">
                    
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label>Tugas</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <textarea class="form-control border-input" placeholder="Tugas" name="tugas" style="height: 130px;" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label>Waktu Pelaksanaan</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control border-input" placeholder="Tanggal Awal" name="taw" required>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control border-input" placeholder="Tanggal Akhir" name="tak" required>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-info btn-fill btn-wd" name="kirim" value="Kirim">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php" ?>