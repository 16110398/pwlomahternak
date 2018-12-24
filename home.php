<section class="no-margin">
  <div class="container-fluid" style="margin-top: 70px;">
  	<div class="row d-block">
  	<div id="omahternak" class="carousel slide" data-ride="carousel"">
  	  <ul class="carousel-indicators">
  	    <li data-target="#omahternak" data-slide-to="0" class="active"></li>
  	    <li data-target="#omahternak" data-slide-to="1"></li>
  	    <li data-target="#omahternak" data-slide-to="2"></li>
  	  </ul>
  	   
  	  <div class="carousel-inner">
  	    <div class="carousel-item active">
  	      <img src="img/1.jpg" alt="#omahternak-1">
  	    </div>
  	    <div class="carousel-item">
  	      <img src="img/2.jpg" alt="#omahternak-2">
  	    </div>
  	    <div class="carousel-item">
  	      <img src="img/3.jpg" alt="#omahternak-3">
  	    </div>
  	  </div>
  	  
  	  <!-- <a class="carousel-control-prev" href="#omahternak" data-slide="prev">
  	    <span class="carousel-control-prev-icon"></span>
  	  </a>
  	  <a class="carousel-control-next" href="#omahternak" data-slide="next">
  	    <span class="carousel-control-next-icon"></span>
  	  </a> !-->
  	</div>
  </div>
  </div>
</section>

<section>
<div class="container-fluid">
		<div class="row">
			<?php 
				if (isset($_GET['cari'])) {
				  	$cari = $_GET['cari'];
				  	$produk = mysqli_query($koneksi, "SELECT * FROM ternak WHERE nama_ternak like '%".$cari."%' ");
            echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=cari&cari=$cari'>";		
				}
			?>
		</div>
</div>
<div class="container-fluid mt-3">
     <div class="card mt-2 shadow-sm">
        <div class="card-header"><h5 class="text-dark"><strong>Ternak Terbaru</strong></h5></div>
          <div class="card-body">
            <div class="row">
              <?php $produk = mysqli_query($koneksi, "SELECT * FROM ternak ORDER BY kd_ternak DESC LIMIT 12");?>
              <?php while ($perproduk=$produk->fetch_assoc()) { ?>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 m-0 p-1" style="padding-bottom:15px; ; margin-top: 7px;">
                  <div class="card bg-white">
                    <div class="kontainer bg-white rounded">
                      <a href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                        <div class="card-body line" style="text-align:center; overflow:hidden; padding:0;">
                          <img class="image img-fluid mx-auto" alt="responsive image" style="height:170px; width:100%; ;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
                          <div class="middle">
                              <div class="tombol">Lihat Detail</div>
                            </div>
                      </a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                      <div class="caption">
                        <a class="link-text" href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                        <h6 class="link-text text-success"><strong> <?php echo $perproduk['nama_ternak']; ?></strong></h6></a>
                        <h6 class="text-warning">Rp. <?php echo number_format($perproduk['harga']);?>,-</h6>
                        <h6 class="text-secondary">Stok <?php echo number_format($perproduk['jumlah']);?> Ekor</h6>
                      </div>
                    </div>  
                  </div>
                </div>    
              <?php } ?>  
            </div>
          </div> 
      </div>
</div>

<div class="container-fluid mt-4">
     <div class="card mt-2 shadow-sm">
        <div class="card-header"><h5 class="text-dark"><strong>Ternak Non Unggas</strong></h5></div>
          <div class="card-body">
            <div class="row">
              <?php $produk = mysqli_query($koneksi, "SELECT * FROM ternak WHERE jenis_ternak='Non Unggas' ORDER BY kd_ternak DESC LIMIT 12");?>
              <?php while ($perproduk=$produk->fetch_assoc()) { ?>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 m-0 p-1" style="padding-bottom:15px; ; margin-top: 7px;">
                  <div class="card bg-white">
                    <div class="kontainer bg-white rounded">
                      <a href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                        <div class="card-body line" style="text-align:center; overflow:hidden; padding:0;">
                          <img class="image img-fluid mx-auto" alt="responsive image" style="height:170px; width:100%; ;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
                          <div class="middle">
                              <div class="tombol">Lihat Detail</div>
                            </div>
                      </a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                      <div class="caption">
                        <a class="link-text" href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                        <h6 class="link-text text-success"><strong> <?php echo $perproduk['nama_ternak']; ?></strong></h6></a>
                        <h6 class="text-warning">Rp. <?php echo number_format($perproduk['harga']);?>,-</h6>
                        <h6 class="text-secondary">Stok <?php echo number_format($perproduk['jumlah']);?> Ekor</h6>
                      </div>
                    </div>  
                  </div>
                </div>    
              <?php } ?>  
            </div>
          </div> 
      </div>
</div>

<div class="container-fluid mt-4">
     <div class="card mt-2 shadow-sm">
        <div class="card-header"><h5 class="text-dark"><strong>Ternak Unggas</strong></h5></div>
          <div class="card-body">
            <div class="row">
              <?php $produk = mysqli_query($koneksi, "SELECT * FROM ternak WHERE jenis_ternak='Unggas' ORDER BY kd_ternak DESC LIMIT 12");?>
              <?php while ($perproduk=$produk->fetch_assoc()) { ?>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 m-0 p-1" style="padding-bottom:15px; ; margin-top: 7px;">
                  <div class="card bg-white">
                    <div class="kontainer bg-white rounded">
                      <a href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                        <div class="card-body line" style="text-align:center; overflow:hidden; padding:0;">
                          <img class="image img-fluid mx-auto" alt="responsive image" style="height:170px; width:100%; ;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
                          <div class="middle">
                              <div class="tombol">Lihat Detail</div>
                            </div>
                      </a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                      <div class="caption">
                        <a class="link-text" href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                        <h6 class="link-text text-success"><strong> <?php echo $perproduk['nama_ternak']; ?></strong></h6></a>
                        <h6 class="text-warning">Rp. <?php echo number_format($perproduk['harga']);?>,-</h6>
                        <h6 class="text-secondary">Stok <?php echo number_format($perproduk['jumlah']);?> Ekor</h6>
                      </div>
                    </div>  
                  </div>
                </div>    
              <?php } ?>  
            </div>
          </div> 
      </div>
</div>

<div class="container-fluid mt-4 mb-4">
     <div class="card mt-2 shadow-sm">
        <div class="card-header"><h5 class="text-dark"><strong>Ternak Ikan</strong></h5></div>
          <div class="card-body">
            <div class="row">
              <?php $produk = mysqli_query($koneksi, "SELECT * FROM ternak WHERE jenis_ternak='Ikan' ORDER BY kd_ternak DESC LIMIT 12");?>
              <?php while ($perproduk=$produk->fetch_assoc()) { ?>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 m-0 p-1" style="padding-bottom:15px; ; margin-top: 7px;">
                  <div class="card bg-white">
                    <div class="kontainer bg-white rounded">
                      <a href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                        <div class="card-body line" style="text-align:center; overflow:hidden; padding:0;">
                          <img class="image img-fluid mx-auto" alt="responsive image" style="height:170px; width:100%; ;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
                          <div class="middle">
                              <div class="tombol">Lihat Detail</div>
                            </div>
                      </a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                      <div class="caption">
                        <a class="link-text" href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                        <h6 class="link-text text-success"><strong> <?php echo $perproduk['nama_ternak']; ?></strong></h6></a>
                        <h6 class="text-warning">Rp. <?php echo number_format($perproduk['harga']);?>,-</h6>
                        <h6 class="text-secondary">Stok <?php echo number_format($perproduk['jumlah']);?> Ekor</h6>
                      </div>
                    </div>  
                  </div>
                </div>    
              <?php } ?>  
            </div>
          </div> 
      </div>
</div>
</section>