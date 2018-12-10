<?php 
session_start();
require_once 'koneksi.php';
?>
<?php 
$kd_ternak = $_GET["id"];
$detail = mysqli_query($koneksi, "SELECT * FROM ternak WHERE kd_ternak='$kd_ternak'");
$ternak = $detail->fetch_assoc(); 

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
  	<link rel="stylesheet" href="icon/fontawesome/css/all.css">
</head>
<body>
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
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
      <li class="nav-item my-2 mr-sm-3 ml-sm-3">  
        <a href="tambahproduk.php" class="btn btn-danger btn-sm my-1" type="submit" title="Pasang Iklan"><i class="fas fa-plus"></i> Jual Ternak</a>  
      </li>
      <?php else: ?>
      <li class="nav-item my-2 mr-sm-5 ml-sm-4">
        <a href="login-seller.php" class="btn btn-danger btn-sm my-1" type="submit" title="Pasang Iklan"><i class="fas fa-plus"></i> Jual Ternak</a>
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
        <a href="daftar.php" class="btn btn-outline-warning btn-sm my-2" type="submit">Daftar</a>
      </li>
      <?php endif ?> 

      <?php if(isset($_SESSION["pelanggan"])): ?>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="img/farmer.png" width="40px" title="Akun Saya">
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

<div class="container" style="margin-top: 70px;">
	<h5>Detail Produk Coming Soon</h5>
	<?php 
	echo "<pre>"; 
	print_r($ternak); 
	echo "</pre>";
	?>
</div>
</body>
</html>
