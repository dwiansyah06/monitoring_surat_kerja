<?php 
    $judul = "Edit Jadwal";

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
                <a class="navbar-brand" href="#">Edit Jadwal Tugas Pegawai</a>
            </div>
        </div>
    </nav>
<div class="content">
    <div class="card">
        <div class="header">
            <h4 class="title">Data Jadwal</h4>
        </div>
        <div class="content">
            <form action="proseseditjadwal.php" method="post">
                <?php
                    $id_jadwal = $_GET['id_jadwal'];
                    $jadwal = mysqli_query($koneksi, "SELECT * FROM tabel_data_jadwal WHERE id_jadwal = '$id_jadwal' ");
                    $get = mysqli_fetch_assoc($jadwal);
                ?>
                <div id="no_edit">
                    <input type="hidden" name="jabatan">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Nama Pegawai</label>
                        </div>
                        <div class="col-md-10">
                            <label><?php echo $get['nama_pegawai'] ?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label>Jabatan</label>
                        </div>
                        <div class="col-md-10">
                            <label><?php echo $get['jabatan'] ?></label>
                        </div>
                    </div>
                </div>
                <div id="edit" class="gone">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Pilih Nama Pegawai</label>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <select name="nama" class="form-control border-input" id="nama_pegawai">
                                <option value="">Pilih Nama</option>
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
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                          <label>
                            <input type="checkbox" onClick="gone(this)"> Jika ingin mengubah nama pegawai
                          </label>
                        </div>
                    </div>
                  </div>

                <div class="row">
                    <div class="col-md-2">
                        <label>Tugas</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <textarea class="form-control border-input" placeholder="<?php echo $get['tugas'] ?>" name="tugas" style="height: 130px;"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label>Waktu Pelaksanaan</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control border-input" placeholder="<?php echo $get['awal'] ?>" name="taw">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control border-input" placeholder="<?php echo $get['akhir'] ?>" name="tak">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label>Set status print</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="radio" name="sp" value="0"> Belum di print
                            <input type="radio" name="sp" value="1"> Sudah di print
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