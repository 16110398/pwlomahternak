<?php 
$qternak = mysqli_query($koneksi, "SELECT * FROM ternak JOIN pelanggan ON ternak.id_user=pelanggan.id_user WHERE ternak.id_user='$data[id_user]' ");
$peternak=$qternak->fetch_assoc();

?>

<div class="container w-75 mx-auto mb-5">
	<div class="row">
		<div class="col-12 col-md-6 col-lg-6 mt-5">
			<h4 class="text-success"><strong>Ubah Produk</strong></h4>
		</div>
	</div>
	
	<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nama">Nama :</label>
				<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $peternak['nama_ternak']; ?>">
			</div>
			<div class="form-group">
			  <label for="gender">Jenis Ternak : (<i>Unggas, Non Unggas, Ikan</i>)</label>
			  	<input type="text" class="form-control" id="jenis" name="jenis" value="<?php echo $peternak['jenis_ternak']; ?>">
	      	</div>
			<div class="form-group mt-3">
				<label for="berat">Berat :   <i>/Kg</i></label>
				<input type="number" class="form-control" id="berat" name="berat" value="<?php echo $peternak['berat']; ?>">
			</div>
			<div class="form-group">
				<label for="umur">Umur :   <i>/Tahun</i></label>
				<input type="number" class="form-control" id="umur" name="umur" value="<?php echo $peternak['umur']; ?>">
			</div>
			<div class="form-group">
				<label for="jumlah">Jumlah : <i>Ekor</i></label>
				<input type="number" class="form-control" id="jumlah" name="jumlah" value="<?php echo $peternak['jumlah']; ?>">
			</div>
			<div class="form-group">
				<label for="beli">Minimum Beli :  <i>Ekor</i></label>
				<input type="number" class="form-control" id="beli" name="beli" value="<?php echo $peternak['minim_beli']; ?>">
			</div>
			<div class="form-group">
				<label for="harga">Harga :  <i>Rp.</i></label>
				<input type="number" class="form-control" id="harga" name="harga" value="<?php echo $peternak['harga']; ?>">
			</div>
			<div class="form-group">
				<label for="deskripsi">Deskripsi :</label>
				<textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?php echo $peternak['deskripsi']; ?></textarea>
			</div>
			<div class="form-group">
				<img src="foto_produk/<?php echo $peternak['foto']; ?>" width="200">
			</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" class="form-control-file border" name="foto[]">
			</div>

			<div class="form-group">
				<input class="btn btn-success btn-block" type="submit" name="edit" value="SIMPAN">
			</div>
		</form>
</div>
<?php 
	if (isset($_POST["edit"])) {
		$jumlah = count($_FILES['foto']['name']);
		if ($jumlah > 0) {
			$foto = array();
			for ($i=0; $i < $jumlah; $i++) { 
				$file_name = $_FILES['foto']['name'][$i];
				$tmp_name = $_FILES['foto']['tmp_name'][$i];				
				move_uploaded_file($tmp_name, "foto_produk/".$file_name);
				$foto[$i] = $file_name; 								
			}
			if (!empty($tmp_name)) {
				move_uploaded_file($tmp_name, "foto_produk/".$file_name);

				$koneksi->query("UPDATE ternak SET nama_ternak='$_POST[nama]',jenis_ternak='$_POST[jenis]',berat='$_POST[berat]',umur='$_POST[umur]',jumlah='$_POST[jumlah]',minim_beli='$_POST[beli]',harga='$_POST[harga]',deskripsi='$_POST[deskripsi]','$foto[0]','$foto[1]','$foto[2]','$foto[3]' WHERE kd_ternak='$peternak[kd_ternak]'");;
			}else{
				$koneksi->query("UPDATE ternak SET nama_ternak='$_POST[nama]',jenis_ternak='$_POST[jenis]',berat='$_POST[berat]',umur='$_POST[umur]',jumlah='$_POST[jumlah]',minim_beli='$_POST[beli]',harga='$_POST[harga]',deskripsi='$_POST[deskripsi]' WHERE kd_ternak='$peternak[kd_ternak]'");
			}
				
			echo "<script>alert('Data produk berhasil diubah');</script>";
			echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=profil'>";	
		}
		else{
			echo "Gambar tidak ada";
		}
	}
?>