<!--<?php 
	//session_start();
	//require_once 'cek.php';
	//require_once 'koneksi.php';
?>!-->
<?php
if(!isset($_SESSION['pelanggan'])) {
	echo "<script>alert('Silahkan login dulu');</script>";
	echo "<script>location='login.php';</script>";
}

?>
<?php 

if (empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])) {
	echo "<script>alert('keranjang kosong, silahkan belanja dulu!');</script>";
	echo "<script>location='index.php?halaman=cari';</script>";
}

?>
<section>
	<div class="container" style="margin-top: 160px; margin-bottom: 160px;">
		<div>
			<div class="alert alert-danger">
				<strong>Perhatian!</strong> Ternak yang anda beli belum termasuk ongkos kirim. Silahkan hubungi penjual untuk biaya pengiriman. Terimakasih.
			</div>
		</div>
		<h1>Keranjang Belanja</h1>
		<hr/>
		<table class="table table-bordered" width="500" border="1">
			<thead>
				<tr>
					<th>No</th>
					<th>Ternak</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Subharga</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; ?>
				<?php $totalbelanja = 0; ?>
				<?php foreach ($_SESSION['keranjang'] as $kd_ternak => $jumlah): ?>
					<?php $qkeranjang=mysqli_query($koneksi,"SELECT * FROM ternak WHERE kd_ternak='$kd_ternak'"); 
					$belanja=$qkeranjang->fetch_assoc();
					$subharga=$belanja['harga']*$jumlah;
 			//echo "<pre>";
 			//print_r($belanja);
 			//echo "</pre>";
					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $belanja['nama_ternak']; ?></td>
						<td>Rp. <?php echo number_format($belanja['harga']); ?>,-</td>
						<td><?php echo $jumlah; ?></td>
						<td><?php echo number_format($subharga); ?></td>

					</tr>
					<?php $no++; ?>
					<?php $totalbelanja+=$subharga; ?>
				<?php endforeach ?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="4">Total Belanja</th>
					<th>Rp. <?php echo number_format($totalbelanja) ?></th>
				</tr>
			</tfoot>
		</table>
		<form method="post">
			<div class="row">
				<div class="col-md-4">
					<input class="form-control" type="text" readonly value="<?php echo $_SESSION['pelanggan']['nama']; ?>">
				</div>
				<div class="col-md-4">
					<input class="form-control" type="text" readonly value="<?php echo $_SESSION['pelanggan']['telepon']; ?>">
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="clearfix">
				<span class="float-right">
					<input class="btn btn-success btn-sm mt-2 float-left" type="submit" name="bayar" value="Bayar">
				</span>
			</div>
		</form>
		<?php 
		if(isset($_POST['bayar'])){

			$idpembeli = $_SESSION['pelanggan']['id_user'];
			$tanggal_pembelian= date('Y-m-d');
			$totalbeli=$totalbelanja;

			$query=mysqli_query($koneksi,"INSERT INTO pembelian (id_user,tanggal_pembelian,total_pembelian) VALUES ('$idpembeli','$tanggal_pembelian','$totalbeli')") or die("error");

			$id_pembelian_barusan = $koneksi->insert_id;

			foreach ($_SESSION['keranjang'] as $kd_ternak => $jumlah_ternak) 
			{
				$query1=mysqli_query($koneksi,"INSERT INTO pembelian_ternak (id_pembelian,kd_ternak,jumlah_ternak) VALUES ('$id_pembelian_barusan','$kd_ternak','$jumlah_ternak')") or die("error");
			}

			unset($_SESSION['keranjang']);

			echo "<script>alert('Pembelian sukses!');</script>";
			echo "<script>location='index.php?halaman=nota&id=$id_pembelian_barusan';</script>";

		}

		?>
	</div>
</section>

<!--<?php //print_r($_SESSION['pelanggan']) ?>
 <?php //print_r($_SESSION['keranjang']) ?> !-->