<?php while ($perproduk=$produk->fetch_assoc()) { ?>
			<div class="col-12 col-md-6 col-lg-3" style="padding-bottom:15px; ; margin-top: 7px;">
				<div class="card bg-white border-0">
				<div class="kontainer bg-white rounded">
				<a href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
					<div class="card-body" style="text-align:center; overflow:hidden; padding:0;">
					
						<img class="image img-fluid mx-auto" alt="responsive image" style="height:180px;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
						<div class="middle">
    						<div class="tombol">Lihat Detail</div>
  						</div>
  					
						</a>
					</div>
				</div>
				<div class="card-footer text-center">
					<div class="caption">
						<a class="link-text" href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
						<h6 class="link-text text-success card-text mb-1"><strong> <?php echo $perproduk['nama_ternak']; ?></strong></h6></a>

						<h6 class="card-text text-warning"> Rp. <?php echo number_format($perproduk['harga']);?>,- /Ekor</h6>
						<h6 class="text-secondary card-text">Jumlah Stok <?php echo number_format($perproduk['jumlah']);?> Ekor</h6>
					</div>
				</div>
			</div>
		</div>
<?php } ?>	