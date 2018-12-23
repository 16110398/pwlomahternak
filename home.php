<section class="no-margin">
  <div class="container-fluid" style="margin-top: 60px;">
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

<div class="container" style="margin-top: 10px;" >
  <div class="card-body text-white bg-success">
    <h5><strong>Ternak Terbaru</strong></h5>
  </div>
</div>
<div class="container">
		<div class="row">
			<?php 
				if (isset($_GET['cari'])) {
				  	$cari = $_GET['cari'];
				  	$produk = mysqli_query($koneksi, "SELECT * FROM ternak WHERE nama_ternak like '%".$cari."%' ");
            echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=cari&cari=$cari'>";
				  			
				}
			?>
		</div>
    <div class="row my-2">
      <?php $produk = mysqli_query($koneksi, "SELECT * FROM ternak ORDER BY kd_ternak DESC LIMIT 8");?>
      <?php while ($perproduk=$produk->fetch_assoc()) { ?>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3" style="padding-bottom:15px; ; margin-top: 7px;">
          <div class="card bg-white">
            <div class="kontainer bg-white rounded">
              <a href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                <div class="card-body line" style="text-align:center; overflow:hidden; padding:0;">
                  <img class="image img-fluid mx-auto" alt="responsive image" style="height:200px; width:100% ;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
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
                <h6 style="color:orange"> Rp. <?php echo number_format($perproduk['harga']);?>,- /Ekor</h6>
                <h6 class="text-secondary">Jumlah Stok <?php echo number_format($perproduk['jumlah']);?> Ekor</h6>
              </div>
            </div>  
          </div>
        </div>    
      <?php } ?>  
    </div>	
    <div class="row mx-auto" style="margin-bottom: 30px;">
      <a class="btn btn-success mx-auto" href="index.php?halaman=cari"><i class="fas fa-angle-down fa-lg"></i> Lihat Semua Ternak</a>
    </div>
</div>


<div class="container" style="margin-top: 10px;" >
  <div class="card-body text-white bg-success">
    <h5><strong>Non Unggas</strong></h5>
  </div>
</div>
<div class="container">
  <div class="row my-2">
    <?php $produk = mysqli_query($koneksi, "SELECT * FROM ternak WHERE jenis_ternak='Non Unggas' ORDER BY kd_ternak DESC LIMIT 8"); ?>
    <?php while ($perproduk=$produk->fetch_assoc()) { ?>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3" style="padding-bottom:15px; ; margin-top: 7px;">
      <div class="card bg-white">
            <div class="kontainer bg-white rounded">
              <a href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                <div class="card-body line" style="text-align:center; overflow:hidden; padding:0;">
                  <img class="image img-fluid mx-auto" alt="responsive image" style="height:200px; width:100%;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
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
          <h6 style="color:orange"> Rp. <?php echo number_format($perproduk['harga']);?>,- /Ekor</h6>
          <h6 class="text-secondary">Jumlah Stok <?php echo number_format($perproduk['jumlah']);?> Ekor</h6>
        </div>
      </div>  
    </div>
    </div>    
    <?php } ?>  
  </div>  
  <div class="row mx-auto" style="margin-bottom: 30px;">
    <a class="btn btn-success mx-auto" href="index.php?halaman=cari"><i class="fas fa-angle-down fa-lg"></i> Lihat Semua Ternak</a>
  </div>
</div>


<div class="container" style="margin-top: 10px;" >
  <div class="card-body text-white bg-success">
    <h5><strong>Unggas</strong></h5>
  </div>
</div>
<div class="container">
  <div class="row my-2">
    <?php $produk = mysqli_query($koneksi, "SELECT * FROM ternak WHERE jenis_ternak='Unggas' ORDER BY kd_ternak DESC LIMIT 8"); ?>
    <?php while ($perproduk=$produk->fetch_assoc()) { ?>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3" style="padding-bottom:15px; ; margin-top: 7px;">
      <div class="card bg-white">
            <div class="kontainer bg-white rounded">
              <a href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                <div class="card-body line" style="text-align:center; overflow:hidden; padding:0;">
                  <img class="image img-fluid mx-auto" alt="responsive image" style="height:200px; width:100%;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
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
          <h6 style="color:orange"> Rp. <?php echo number_format($perproduk['harga']);?>,- /Ekor</h6>
          <h6 class="text-secondary">Jumlah Stok <?php echo number_format($perproduk['jumlah']);?> Ekor</h6>
        </div>
      </div>  
    </div>
    </div>    
    <?php } ?>  
  </div>  
  <div class="row mx-auto" style="margin-bottom: 30px;">
    <a class="btn btn-success mx-auto" href="index.php?halaman=cari"><i class="fas fa-angle-down fa-lg"></i> Lihat Semua Ternak</a>
  </div>
</div>


<div class="container" style="margin-top: 10px;" >
  <div class="card-body text-white bg-success">
    <h5><strong>Ikan</strong></h5>
  </div>
</div>
<div class="container">
  <div class="row my-2">
    <?php $produk = mysqli_query($koneksi, "SELECT * FROM ternak WHERE jenis_ternak='Ikan' ORDER BY kd_ternak DESC LIMIT 8"); ?>
    <?php while ($perproduk=$produk->fetch_assoc()) { ?>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3" style="padding-bottom:15px; ; margin-top: 7px;">
      <div class="card bg-white">
            <div class="kontainer bg-white rounded">
              <a href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                <div class="card-body line" style="text-align:center; overflow:hidden; padding:0;">
                  <img class="image img-fluid mx-auto" alt="responsive image" style="height:200px; width:100%;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
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
  </div>  
  <div class="row mx-auto" style="margin-bottom: 30px;">
    <a class="btn btn-success mx-auto" href="index.php?halaman=cari"><i class="fas fa-angle-down fa-lg"></i> Lihat Semua Ternak</a>
  </div>
</div>