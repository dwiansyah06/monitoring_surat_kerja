<?php
include "confiq1.php";
$nama=$_POST['nama'];
$jabatan = mysqli_query($koneksi, "SELECT jabatan FROM tabel_data_pegawai WHERE nama_pegawai = '$nama' ");

$row = mysqli_num_rows($jabatan);
if ($row > 0){
 $data = mysqli_fetch_assoc($jabatan); ?>
 <div class="col-md-2">
    <label>Jabatan</label>
 </div>
 <div class="col-md-10">
    <div class="form-group">
       <input type="text" class="form-control border-input" name="jabatan" value="<?php echo $data['jabatan']; ?>" readonly> 
    </div>
 </div>
<?php } ?>