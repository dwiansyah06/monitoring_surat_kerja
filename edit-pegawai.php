<?php 
    $judul = "Edit Pegawai";

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
                <a class="navbar-brand" href="#">Edit Data Pegawai</a>
            </div>
        </div>
    </nav>

<div class="content">
<div class="card">
        <div class="header">
            <h4 class="title">Data Pegawai</h4>
        </div>
        <div class="content">
            <form action="proseseditpegawai.php" method="post">
                <?php
                    $id_pegawai = $_GET['id_pegawai'];
                    $q_pegawai = mysqli_query($koneksi, "SELECT * FROM tabel_data_pegawai WHERE id_pegawai = '$id_pegawai' ");
                    $get = mysqli_fetch_assoc($q_pegawai);
                ?>
                <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai ?>">
                <div class="row">
                    <div class="col-md-2">
                        <label>Nama Pegawai</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" class="form-control border-input" placeholder="<?php echo $get['nama_pegawai']; ?>" name="nama">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label>NIP</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="number" min="0" class="form-control border-input" placeholder="<?php echo $get['NIP']; ?>" name="nip">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label>Jabatan</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" class="form-control border-input" placeholder="<?php echo $get['jabatan'] ?>" name="jabatan">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label>Pangkat</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" class="form-control border-input" placeholder="<?php echo $get['pangkat'] ?>" name="pangkat">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label>Golongan</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label><?php echo $get['golongan'] ?></label>
                            <select name="golongan" class="form-control border-input">
                                <option value="">- Pilih golongan-</option>
                                <option value="II a">II a</option>
                                <option value="II b">II b</option>
                                <option value="II c">II c</option>
                                <option value="II d">II d</option>
                                <option value="III a">III a</option>
                                <option value="III b">III b</option>
                                <option value="III c">III c</option>
                                <option value="III d">III d</option>
                                <option value="III a">III a</option>
                                <option value="III b">III b</option>
                                <option value="III c">III c</option>
                                <option value="III d">III d</option>
                            </select>
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