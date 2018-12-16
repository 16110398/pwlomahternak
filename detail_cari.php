<?php require_once 'koneksi.php'; ?>
<div class="container" style="margin-top: 80px">
  <ul class="breadcrumb bg-light border">
    <li class="breadcrumb-item text-success"><a class="text-success" href="index.php">Home</a></li>
    <li class="breadcrumb-item active">Ternak</li>
  </ul>
	<div class="border-0">
    <?php 
			if (isset($_GET['cari'])) {
				  $cari = $_GET['cari'];
				  echo "<h5 class='text-success'><strong>Hasil Pencarian : $cari</strong></h5>";
				}else{
				 	echo "<h5 class='text-success'><strong>Macam-macam hewan ternak</strong></h5>";
			}
		?>  	
  </div>
	<div class="row my-2">
		<div class="col-12 col-md-2 col-lg-2">
			<div class="my-1">

   				<form class="form-group mx-auto" method="post">
   					<label for="sel1">Filter Produk : </label>
						<select class="form-control" name="id_filter">
							<option>Non Unggas</option>
							<option>Unggas</option>
              <option>Ikan</option>
						</select>
          </form>
          <form>
   					<label for="sel2">Urutkan : </label>
						<select class="form-control" name="id_urutan">
						   <option>Terbaru</option>
						   <option>Terlama</option>
						   <option>Harga Tertinggi</option>
						   <option>Harga Terendah</option>
						</select>
   				</form>
			</div>
		</div>
		<div class="col-12 col-md-10 col-lg-10 col-xl-10">
			<div class="row my-2">
				<?php 
					if (isset($_GET['cari'])) {
				  		$cari = $_GET['cari'];
				  		$produk = mysqli_query($koneksi, "SELECT * FROM ternak WHERE nama_ternak like '%".$cari."%' ");
				  			
				 	}else{
				  		$produk = mysqli_query($koneksi, "SELECT * FROM ternak ORDER BY kd_ternak DESC");
					}
				?>
        
				<?php 
					require_once 'produk2.php';
			 	?>
			</div>
			
		</div>
	</div>
</div>
