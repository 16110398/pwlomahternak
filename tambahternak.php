<div class="container w-75 mb-5">
	<div class="row">
		<div class="col-12 col-md-6 col-lg-6 mt-5">
			<h4 class="text-success mb-5"><strong>Tambah Ternak</strong></h4>
		</div>
	</div>
	
	<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nama">Nama :</label>
				<input type="text" class="form-control" id="nama" name="nama" required="Nama tidak boleh kosong">
			</div>
			<div class="form-group">
			  <label for="gender">Jenis Ternak : (<i>Unggas, Non Unggas, Ikan</i>)</label>
			  	<select class="form-control" id="sel1" name="jenis" required="Tidak boleh kosong">
			        <option>Unggas</option>
			        <option>Non Unggas</option>
			        <option>Ikan</option>
		      </select>
	      	</div>
			<div class="form-group mt-3">
				<label for="berat">Berat :   <i>/Kg</i></label>
				<input type="number" class="form-control" id="berat" name="berat" required="Tidak boleh kosong">
			</div>
			<div class="form-group">
				<label for="umur">Umur :   <i>/Tahun</i></label>
				<input type="number" class="form-control" id="umur" name="umur" required="Tidak boleh kosong">
			</div>
			<div class="form-group">
				<label for="jumlah">Jumlah : <i>Ekor</i></label>
				<input type="number" class="form-control" id="jumlah" name="jumlah" required="Tidak boleh kosong">
			</div>
			<div class="form-group">
				<label for="beli">Minimum Beli :  <i>Ekor</i></label>
				<input type="number" class="form-control" id="beli" name="minimbeli" required="Tidak boleh kosong">
			</div>
			<div class="form-group">
				<label for="harga">Harga :  <i>Rp.</i></label>
				<input type="number" class="form-control" id="harga" name="harga" required="Tidak boleh kosong">
			</div>
			<div class="form-group">
				<label for="deskripsi">Deskripsi :</label>
				<textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
			</div>
	
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" class="form-control-file border" name="foto">
			</div>

			<div class="form-group">
				<input class="btn btn-success btn-block" type="submit" name="simpan" value="SIMPAN">
			</div>
		</form>
</div>
<?php 
if (isset($_POST['simpan']))
{

	$nama=$_POST['nama'];
	$jenis=$_POST['jenis'];
	$berat=$_POST['berat'];
	$umur=$_POST['umur'];
	$jumlah=$_POST['jumlah'];
	$deskripsi=$_POST['deskripsi'];
	$harga=$_POST['harga'];
	$minimbeli=$_POST['minimbeli'];

	$fototernak=$_FILES['foto']['name'];
	$lokasi=$_FILES['foto']['tmp_name'];
	
	move_uploaded_file($lokasi, "foto_produk/".$fototernak);

	$koneksi->query("INSERT INTO ternak (id_user,nama_ternak,jenis_ternak,berat,umur,jumlah,deskripsi,harga,minim_beli,foto) VALUES ('$data[id_user]',$nama','$jenis','$berat','$umur','$jumlah','$deskripsi','$harga','$minimbeli','$fototernak')") or die ("error");

	echo "<script>alert('Ternak berhasil ditambahkan');</script>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=profil&page=penjualan'>";
}
?>