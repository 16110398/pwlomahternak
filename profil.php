<?php 
session_start();
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tempat Jual Beli Hewan Ternak Berkualitas | Omahternak.id</title>
	<link rel="icon" type="image/png" href="icon/omahternak1.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/style.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
   <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
  <link rel="stylesheet" href="icon/fontawesome/css/all.css">
	<style>
  	.carousel-inner img {
      width: 100%;
      height: 100%;
 	}

 	</style>
</head>
<body style="background-color: #f2f2f2">
 
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">
    <img src="icon/omahternak.png" width="170px" title="omahternak.id" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-sm-5">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle my-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategori
        </a>
        <div class="dropdown-menu tooltiptext" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Non Unggas</a>
          <a class="dropdown-item" href="#">Unggas</a>
          <a class="dropdown-item" href="#">Ikan</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Lain-lain</a>
        </div>
      </li>
    </ul>
     <form class="mx-3 my-auto d-inline w-50">
        <div class="input-group">
          <input type="text" class="form-control border" placeholder="Cari Ternak ...?" name="cari">
      </div>
    </form>

   <ul class="navbar-nav ">
      <?php if(isset($_SESSION["pelanggan"])): ?>
      <li class="nav-item my-2 mr-sm-4 ml-sm-3">  
        <a href="tambahproduk.php" class="btn btn-danger btn-sm my-1" type="submit" title="Jual Ternak"><i class="fas fa-plus"></i> Jual Ternak</a>  
      </li>
      <?php else: ?>
      <li class="nav-item my-2">
        <a href="login.php" class="btn btn-danger btn-sm my-1 ml-sm-5 mr-sm-3" type="submit" title="Jual Ternak"><i class="fas fa-plus"></i> Jual Ternak</a>
      </li>
       <?php endif ?> 

      <?php if(isset($_SESSION["pelanggan"])): ?>
      <li class="nav-item my-3 mr-sm-3">
        <a href="keranjang.php" class="text-success" type="submit" title="Keranjang Belanja"><i class="fas fa-shopping-cart fa-lg"></i></a>
      </li>
       <li class="nav-item my-3 mr-sm-3">
        <a href="pesan.php" class="text-success" type="submit" title="Pesan Masuk"><i class="fas fa-comments fa-lg"></i></a>
      </li>
      <li class="nav-item my-3 mr-sm-3">
        <a href="notif.php" class="text-success" type="submit" title="Pemberitahuan"><i class="fas fa-bell fa-lg"></i></a>
      </li>
       <?php else: ?> 
      <li class="nav-item my-1 mr-sm-1">
        <a href="daftar.php" class="btn btn-outline-warning btn-sm my-2 ml-sm-5" type="submit">Daftar</a>
      </li>
      <?php endif ?> 

      <?php if(isset($_SESSION["pelanggan"])): ?>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="ml-sm-3" src="img/farmer.png" width="40px" title="Akun Saya">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
          <a class="dropdown-item" href="profil.php"><img src="img/farmer.png" width="35px">
          <p><strong>Wawan</strong></p></a> 
          <a class="dropdown-item" href="profil.php">
          <p class="small">Lihat Profil</p></a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Iklan Produk</a>
            <a class="dropdown-item" href="#">Penjualan</a>
            <a class="dropdown-item" href="#">Pembelian</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Dompetku :</a>
            <a class="dropdown-item text-success" href="#">Rp. 0,-</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
      <?php else: ?> 
      <li class="nav-item my-1">
        <a href="login.php" class="btn btn-outline-success btn-sm my-2" type="submit" title="Login">Login</a>
      </li>
       <?php endif ?> 
    </ul>
  </div>
  </div>
</nav>




<div class="container" style="margin-top: 80px; margin-bottom: 50px;">
  <div class="row">
    
  </div>
  <div class="row">
    <div class="col-12 col-md-4 col-lg-4 mb-1">
      <div class="card">

        <div class="container">
        <div class="row">
          <div class="col-12 mt-2">
             <img class="img-fluid rounded-circle mx-auto d-block" src="foto_peternak/wawan.png" width="200" height="200">
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
            <h6>Wawan</h6>
            <hr>
          </div>
        </div>
         <div class="row">
          <div class="col-12">
            <h6>085725813121</h6>
            <hr>
          </div>
        </div>
         <div class="row">
          <div class="col-12">
            <h6>Batul</h6>
            <hr>
          </div>
        </div>
         <div class="row">
          <div class="col-12">
            <h6>Wawan</h6>
            <hr>
          </div>
        </div>

      </div>


      </div>
    </div>
    <div class="col-12 col-md-8 col-lg-8">
      <div class="card h-100">
            <div class="container mt-4">
              
              <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="pill" href="#home">Ternak Saya</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu1">Penjualan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu2">Pembelian</a>
                </li>
              </ul>

              
              <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                  <h3>Daftar Ternak</h3>
                  <div class="row">
                    <?php $produk = mysqli_query($koneksi, "SELECT * FROM ternak ORDER BY kd_ternak DESC LIMIT 3"); ?>
                    <?php while ($perproduk=$produk->fetch_assoc()) { ?>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" style="padding-bottom:15px; ; margin-top: 7px;">
                        <div class="card bg-white border">
                          <div class="kontainer bg-white rounded">
                            <a href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                              <div class="card-body line" style="text-align:center; overflow:hidden; padding:0;">
                                <img class="image img-fluid mx-auto" alt="responsive image" style="height:150px; width:100% ;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
                                <div class="middle">
                                    <div class="tombol">Lihat</div>
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
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                  <h3>Penjualan</h3>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                  <h3>Pembelian</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
              </div>
            </div>

      </div>

    </div>

  </div>
</div>










<div class="container-fluid bg-light">
  <div class="row mx-auto">
    <div class="col-xs-12 col-md-3 col-lg-3 col-xl-3 my-2">
      <img src="icon/omahternak.png" width="200" title="Omahternak.id">
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6 my-3">
      <img class="ml-sm-5" src="icon/bank.png" title="rekening bersama" style="width: 300px; height: 30px;">
    </div>
    <div class="col-xs-12 col-md-3 col-lg-3 col-xl-3 my-2 panelfootersosmed mx-auto">
      <h6>Ikuti Kami :</h6>
       <ul>
            <li><a rel="follow" target="_blank" href="#"><img alt="facebook omahternak" title="Facebook Omahternak" src="icon/facebook.png" width="30px"></a></li>

            <li><a rel="follow" target="_blank" href="#"><img alt="twitter omahternak" title="Twitter Omahternak" src="icon/twitter.png" width="30px"></a></li>

            <li><a rel="follow" target="_blank" href="#"><img alt="instagram omahternak" title="Instagram Omahternak" src="icon/instagram.png" width="30px"></a></li>

            <li><a rel="follow" target="_blank" href="#"><img alt="youtube omahternak" title="Youtube Omahternak" src="icon/youtube.png" width="30px"></a></li>

            <li><a rel="follow" target="_blank" href="#"><img alt="google plus omahternak" title="Google Plus Omahtenak" src="icon/google-plus.png" width="30px"></a></li>
          </ul>
    </div>
  </div>
</div>
<div class="container-fluid bg-success">
  <div class="row mx-auto ml-sm-5" style="padding-top: 10px">
    <div class="col-xs-12 col-md-6 col-lg-3 col-xl-3">
      <h5 style="color: white"><strong>Tentang Kami</strong></h5>
      <p style="color: white" class="text-justify"><strong>Omahternak.id</strong> 
      adalah Tempat Jual Beli Ternak Berkualitas dan Investasi Ternak Terpercaya. Jl. Bibis No.25, Bangunjiwo, Kasihan, Bantul, D.I Yogyakarta.<br/> cs@omahternak.com <br/>Jam Layanan: 08.00-17.00 WIB</p>
      
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3 col-xl-3">
    <h5 class="text-white ml-sm-5"><strong>Panduan Umum</strong></h5>
      <ul class="navbar-nav ml-sm-5 my-2">
      	<li><a class="text-white" style="text-decoration: none;" href="">Tentang Omahternak</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href="">FAQ</a></li>
        <li><a class="text-white" style="text-decoration: none;" href="">Cara mendapatkan sertifikat hewan ternak</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href="">Cara Jual Barang</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href="">Cara Beli Barang</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href="">Tentang Akun Premium</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href="">Syarat dan Ketentuan</a></li>
      </ul>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3 col-xl-3 my-1">
    <h5 class="text-white ml-sm-4"><strong>Hubungi Kami</strong></h5>      
      <ul class="navbar-nav ml-sm-4">
      	<li><a class="text-white" style="text-decoration: none;" href=""><i class="fas fa-envelope"></i> info@omahternak.id</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href=""><i class="fab fa-facebook"></i> omahternak.id</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href=""><i class="fab fa-instagram"></i> omahternak.id</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href=""><i class="fab fa-twitter-square"></i> omahternak.id</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href=""><i class="fab fa-whatsapp-square"></i> 08988741766</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href=""><i class="fab fa-youtube"></i> omahternak.id</a></li>
      </ul>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3 col-xl-3 my-1">
      <h5 class="text-white"><strong>Download Aplikasi</strong></h5>
      <img src="img/coming_soon_googleplay.png" width="200">
    </div>
  </div>
</div>
<div class="container-fluid bg-light">
  <div class="row">
    <div class="col-12">
      <p class="my-3 mx-auto">&copy; 2018 Omahternak.Id</p>
    </div>
  </div>
</div>

</body>
</html>