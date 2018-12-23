<?php 
session_start();
require_once 'koneksi.php';


if (isset($_SESSION['pelanggan'])) {
	echo "<script>alert('Silahkan login');</script>";
	echo "<script>location='login.php';</script>";
}
 ?>

  <table width="500" border="1">
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
 		<?php endforeach ?>
 	</tbody>
 </table>
 <a href="index.php?halaman=cari">Lanjutkan Belanja</a>
 <a href="checkout.php">Checkout</a>