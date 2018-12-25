
<section>
	<div class="container" style="margin-top: 160px; margin-bottom: 180px;">
		<h2>Nota Pembelian</h2>
		<hr>
		<?php 
		$query = mysqli_query($koneksi, "SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_user=pelanggan.id_user WHERE pembelian.id_pembelian='$_GET[id]'");
		$nota = $query->fetch_assoc();
		?>
		<strong><?php echo $nota['nama']; ?></strong><br>
		<p>
			<?php echo $nota['telepon']; ?>
		</p>
		<p>
			Tanggal : <?php echo $nota['tanggal_pembelian']; ?><br>
			Total   : Rp. <?php echo number_format($nota['total_pembelian']); ?>,-
		</p>

		<table class="table table-bordered" width="500" border="1">
			<thead>
				<tr>
					<th>No</th>
					<th>Ternak</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1; ?>
				<?php $conquery=mysqli_query($koneksi,"SELECT * FROM pembelian_ternak JOIN ternak ON pembelian_ternak.kd_ternak=ternak.kd_ternak WHERE pembelian_ternak.id_pembelian='$_GET[id]'"); ?>
				<?php while ($detail=$conquery->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $detail['nama_ternak']; ?></td>
					<td><?php echo $detail['harga']; ?></td>
					<td><?php echo $detail['jumlah_ternak']; ?></td>
					<td>
						<?php echo $detail['harga']*$detail['jumlah_ternak']; ?>
					</td>
				</tr>
				<?php $nomor++; ?>
				<?php } ?>
			</tbody>
		</table>
		<div class="row">
			<div class="col-md-7">
				<div class="alert alert-info">
					Silahkan melakukan pembayaran sebesar <strong>Rp. <?php echo number_format($nota['total_pembelian']); ?>,-</strong> ke nomor rekening <strong>BNI 0264659916/BRI 04252774164/Mandiri 032874151/BCA 057465646</strong> a.n <strong>Omahternak.id</strong>
				</div>
			</div>
			
		</div>
	</div>
</section>


 <?php 
echo "<pre>";
print_r($detail);
echo "</pre>";

  ?>
