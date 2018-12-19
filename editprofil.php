
<div class="container w-75 mx-auto mb-5">
	<div class="row">
		<div class="col-12 col-md-6 col-lg-6 mt-5">
			<h4 class="text-success"><strong>Ubah Profil</strong></h4>
		</div>
		<div class="col-12 col-md-6 col-lg-6">
			<a class="btn btn-success float-right" href="index.php?halaman=profil">Home Profil</a>
		</div>
	</div>
	
	<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nama">Nama :</label>
				<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
			</div>
			<div class="form-group">
			  <label for="gender">Jenis Kelamin :</label>
			</div>
			<div class="form-check-inline">
		      <label class="form-check-label" for="men">
		        <input type="radio" class="form-check-input" id="men" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki
		      </label>
		    </div>
		    <div class="form-check-inline">
		      <label class="form-check-label" for="women">
		        <input type="radio" class="form-check-input" id="women" name="jenis_kelamin" value="Perempuan">Perempuan
		      </label>
		    </div>
			<div class="form-group">
				<br>
				<label for="email">Email :</label>
				<input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email']; ?>">
			</div>
			<div class="form-group">
				<label for="pass">Password :</label>
				<input type="password" class="form-control" id="pass" name="password"  required="Masukan password"  placeholder="Masukan password">
			</div>
			<div class="form-group">
				<label for="telepon">Telepon :</label>
				<input type="number" class="form-control" id="telepon" name="telepon"  required="Masukkan telepon" value="<?php echo $data['telepon']; ?>">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat :</label>
				<textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $data['alamat']; ?></textarea>
			</div>
			<div class="form-group">
				<img src="foto_peternak/<?php echo $data['img_profil'] ?>" width="200">
			</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" class="form-control-file border" name="img_profil">
			</div>
			<div class="form-group">
				<input class="btn btn-success btn-block" type="submit" name="edit" value="SIMPAN">
			</div>
		</form>
</div>
<?php 
if (isset($_POST['edit']))
{
	$img_profil=$_FILES['img_profil']['name'];
	$lokasifoto=$_FILES['img_profil']['tmp_name'];
	$password=md5($_POST['password']);
	//jika foto dirubah
	if(!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "foto_peternak/$img_profil");

		$koneksi->query("UPDATE pelanggan SET nama='$_POST[nama]',jenis_kelamin='$_POST[jenis_kelamin]',email='$_POST[email]',password='$password',telepon='$_POST[telepon]',alamat='$_POST[alamat]',img_profil='$img_profil' WHERE id_user='$data[id_user]'");
	}
	else
	{
		$koneksi->query("UPDATE pelanggan SET nama='$_POST[nama]',jenis_kelamin='$_POST[jenis_kelamin]',email='$_POST[email]',password='$password',telepon='$_POST[telepon]',alamat='$_POST[alamat]' WHERE id_user='$data[id_user]'");
	}
	echo "<script>alert('Data profil berhasil diubah');</script>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=profil'>";
}

?>