<?php 
session_start();
require_once 'koneksi.php';

if(isset($_SESSION['pelanggan'])) {
  $data = $_SESSION['pelanggan']; 
}

?>

<!DOCTYPE html>
<html>
<head>
  <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-GNTWQG9');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131282064-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-131282064-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=icon type=image/png href="http://omahternak.id/icon/omahternak1.png">
    <!meta http-equiv="refresh" content="30">
    <!meta name="google-site-verification" content="sbsmSdURfBifY3twsPhLYdQTG3onX0UnLW6vM8la2U0"/>
    <link rel="canonical" href="http://www.omahternak.id"/>
    
    <meta property="og:url" content="http://www.omahternak.id" />
    <meta property="og:site_name" content="Omah Ternak"/>
    <meta property="og:description" content="Situs jual beli hewan ternak berkualitas dan bersertifikat, lengkap dan terpercaya. Beli hewan ternak sehat, Omah Ternak, omahternak, omahternak.id, jual ternak, jual hewan ternak">
    <meta name=title content="OMAH TERNAK">
    <meta name="author" content="omahternak.id">
    <meta name="description" content="Omah Ternak, Omahternak situs jual beli hewan ternak bersertifikat di Indonesia. Jual beli hewan ternak berkualitas,omah ternak, OMAH TERNAK, Omah Ternak, omahternak, jual ternak, jual beli hewan ternak, jual beli hewan ternak bersertifikat, jual ternak bersertifikat, omahternak.id, jual hewan ternak, jual sapi">
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
<body >
  <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-GNTWQG9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
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
      <li class="nav-item my-2 mr-sm-4 ml-sm-3">  
        <a href="index.php?halaman=profil&page=tambahternak" class="btn btn-danger btn-sm my-1" type="submit" title="Jual Ternak"><i class="fas fa-plus"></i> Jual Ternak</a>  
      </li>

      <?php if(isset($_SESSION["pelanggan"])): ?>
      <li class="nav-item my-3 mr-sm-3">
        <a href="keranjang.php" class="text-success" type="submit" title="Keranjang Belanja"><i class="fas fa-shopping-cart fa-lg"></i></a>
      </li>
       <li class="nav-item my-3 mr-sm-3">
        <a href="pesan.php" class="text-success" type="submit" title="Pesan Masuk"><i class="fas fa-comments fa-lg"></i></a>
      </li>
      <li class="nav-item my-3 mr-sm-3">
        <a href="notif.php" class="text-success border-0" type="submit" title="Pemberitahuan"><i class="fas fa-bell fa-lg"></i></a>
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
          <a class="dropdown-item" href="index.php?halaman=profil"><img class="rounded-circle" src="foto_peternak/<?php echo $data['img_profil']; ?>" height="50px" width="50px">
          <p><strong><?php echo $data["nama"]; ?></strong></p></a> 
          <a class="dropdown-item" href="index.php?halaman=profil">
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

<?php 
  if (isset($_GET['halaman']))
  {
    if ($_GET['halaman']=="cari") {
      include 'detail_cari.php';
    }
    elseif ($_GET['halaman']=="detail") {
      include 'detail_produk.php';
    }
    elseif ($_GET['halaman']=="profil") {
      include 'profil.php';
    }elseif ($_GET['halaman']=='tentang') {
      include 'tentangomahternak.php';
    }

  }else{
    include 'home.php';
  }

 ?>



<div class="container-fluid bg-light">
    <div class="row mx-auto">
      <div class="col-xs-12 col-md-12 col-lg-4 col-xl-4 my-2">
        <img src="icon/omahternak.png" width="200" title="Omahternak.id">
      </div>
      <div class="col-xs-12 col-md-12 col-lg-4 col-xl-4 my-3">
        <img src="icon/bank.png" title="rekening bersama" style="width: 300px; height: 30px;">
      </div>
      <div class="col-xs-12 col-md-12 col-lg-4 col-xl-4 my-2 panelfootersosmed justify-content-center">
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

<div class="container-fluid bg-success mx-auto">
  <div class="row mx-auto" style="padding-top: 10px">
    <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
      <h5 style="color: white"><strong>Tentang Kami</strong></h5>
      <p style="color: white" class="text-justify"><strong>Omahternak.id</strong> 
      adalah Tempat Jual Beli Ternak Berkualitas dan Investasi Ternak Terpercaya. Jl. Bibis No.25, Bangunjiwo, Kasihan, Bantul, D.I Yogyakarta.<br/> cs@omahternak.com <br/>Jam Layanan: 08.00-17.00 WIB</p>
      
    </div>
    <div class="col-xs-12 col-md-12 col-lg-3 col-xl-3">
    <h5 class="text-white"><strong>Panduan Umum</strong></h5>
      <ul class="navbar-nav my-2">
      	<li><a class="text-white" style="text-decoration: none;" href="index.php?halaman=tentang">Tentang Omahternak</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href="">FAQ</a></li>
        <li><a class="text-white" style="text-decoration: none;" href="">Cara mendapatkan sertifikat hewan ternak</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href="">Cara Jual Barang</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href="">Cara Beli Barang</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href="">Tentang Akun Premium</a></li>
      	<li><a class="text-white" style="text-decoration: none;" href="">Syarat dan Ketentuan</a></li>
      </ul>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-3 col-xl-3 my-1">
    <h5 class="text-white"><strong>Hubungi Kami</strong></h5>      
      <ul class="navbar-nav">
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