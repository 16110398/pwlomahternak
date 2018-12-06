<?php while ($perproduk=$produk->fetch_assoc()) { ?>
	<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3" style="padding-bottom:15px; ; margin-top: 7px;">
		<div class="card shadow-sm">
			<div class="kontainer bg-white rounded">
				<a href="detail_produk.php?id=<?php echo $perproduk['kd_ternak'];?>">
					<div class="card-body" style="text-align:center; overflow:hidden; padding:0;">
						<img class="image img-fluid mx-auto" alt="responsive image" style="height:200px; width:250px ;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
						<div class="middle">
    						<div class="tombol">Lihat Detail</div>
  						</div>
				</a>
					</div>
			</div>
			<div class="card-footer text-center">
				<div class="caption">
					<a class="link-text" href="detail_produk.php?id=<?php echo $perproduk['kd_ternak'];?>">
					<h6 class="link-text text-success"><strong> <?php echo $perproduk['nama_ternak']; ?></strong></h6></a>
					<h6 style="color:orange"> Rp. <?php echo number_format($perproduk['harga']);?>,- /Ekor</h6>
					<h6 class="text-secondary">Jumlah Stok <?php echo number_format($perproduk['jumlah']);?> Ekor</h6>
				</div>
			</div>	
		</div>
	</div>		
<?php } ?>	