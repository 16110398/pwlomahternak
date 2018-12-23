<?php 
session_start();
//echo "<pre>";
//print_r($_SESSION['keranjang']);
//echo "</pre>"
 ?>
 <?php 
	require_once 'koneksi.php';
	if (empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])) {
		echo "<script>alert('keranjang kosong, silahkan belanja dulu!');</script>";
		echo "<script>location='index.php?halaman=cari';</script>";
	}

  ?>

 <h1>Keranjang Belanja</h1>
 <hr/>
 <table width="500" border="1">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Ternak</th>
 			<th>Harga</th>
 			<th>Jumlah</th>
 			<th>Subharga</th>
 			<th>Aksi</th>
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
 			<td>
 				<a href="hapuskeranjang.php?id=<?php echo $kd_ternak; ?>">Hapus</a>
 			</td>
 		</tr>
 		<?php $no++; ?>
 		<?php endforeach ?>
 	</tbody>
 </table>
 <a href="index.php?halaman=cari">Lanjutkan Belanja</a>
 <a href="checkout.php">Checkout</a>