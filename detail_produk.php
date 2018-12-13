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
<body style="background-color: #eee">
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
      <li class="nav-item my-2 mr-sm-4 ml-sm-3">  
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
        <a class="nav-link ml-sm-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

<!--<div class="container" style="margin-top: 70px;">
	<h5>Detail Produk Coming Soon</h5>
	<?php 
	echo "<pre>"; 
	print_r($ternak); 
	echo "</pre>";
	?>
</div>-->
<div class="container" style="margin-top: 80px;">
      <?php 
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $produk = mysqli_query($koneksi, "SELECT * FROM ternak WHERE nama_ternak like '%".$cari."%' ");
            echo "<meta http-equiv='refresh' content='l;url=detail_cari.php?cari=$cari'>";
                
        }
    ?>
  <ul class="breadcrumb bg-light">
    <li class="breadcrumb-item text-success"><a class="text-success" href="index.php">Home</a></li>
    <li class="breadcrumb-item text-success"><a class="text-success" href="detail_cari.php">Ternak</a></li>
    <li class="breadcrumb-item active">Detail Ternak</li>
  </ul>
  <div class="row">
    <div class="col-12 col-md-9 col-lg-9 col-xl-9 my-1">
      <div class="card bg-white">
        <div class="row">
          <div class="col-12 col-md-5 col-lg-5">
            <img class="img img-fluid ml-3 my-3" src="foto_produk/sapi3.jpg" style="height: 210px;">
          </div>
          <div class="col-12 col-md-7 col-lg-7">
            <div class="row mr-1">
              <div class="col-12 my-3">
                <h3 class="text-success">Sapi Metal Super</h3>
                <hr>
              </div>
            </div>
            <div class="row mr-1">
              <div class="col-12">
                <h6>Update</h6>
                <h6>Diskusi</h6>
                <h6>Dilihat</h6>
                <h6>Kategori</h6>
                <hr>
              </div>
            </div>
            <div class="row mr-1">
              <div class="col-12">
                <h4 class="text-warning">Rp. 30.000.000,- /Ekor</h4>
                <h6 class="text-dark">Minimal Pembelian : 1 Ekor</h6>
                <h6 class="text-info">Stok : 25 Ekor</h6>
                <hr>
              </div>
            </div>
            <div class="row mr-1">
              <div class="col-12">
                <a href="" class="btn btn-success btn-block"><strong>BELI SEKARANG</strong></a>
              </div>
              <div class="col-12 my-3">
                <div class="card mx-auto">
                  <p class="ml-2 mr-2 my-2"><strong>Transaksi Aman Gunakan Rekening Bersama Omahternak</strong><br/>
                    1. Hanya pembayaran melalui rekening an Omahternak.id dijamin 100% aman. <a href="">Lihat selengkapnya </a> <br/> 2. Uang akan dikembalikan jika barang tidak diterima
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-3 col-lg-3 col-xl-3 my-1">
      <div class="card bg-white">
        Profil Peternak
      </div>
    </div>
  </div>
</div>

<div class="container my-3">
  <div class="row">
    <div class="col-12 col-md-9 col-lg-9 col-xl-9 my-1">
      <div class="card bg-white">
        <div class="row">
            <div class="container">

              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home">Sertifikat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu1">Deskripsi Ternak</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu2">Profil Peternak</a>
                </li>
              </ul>

              <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                  <h5>SERTIFIKAT</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                  <h5>DESKRIPSI PRODUK</h5>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                  <h5>PROFIL PETERNAK</h5>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>

                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12 col-md-9 col-lg-9 col-xl-9 my-1">
      <div class="card bg-white">
        <div class="row">

          <div class="container">
            <h5 class="text-dark my-3 ml-3">Produk Sejenis</h5>
            <div class="row my-2 mr-1 ml-1">
              <?php $produk = mysqli_query($koneksi, "SELECT * FROM ternak ORDER BY kd_ternak DESC LIMIT 3"); ?>
              <?php while ($perproduk=$produk->fetch_assoc()) { ?>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" style="padding-bottom:15px; ; margin-top: 7px;">
                  <div class="card bg-white">
                    <div class="kontainer bg-white rounded">
                      <a href="detail_produk.php?id=<?php echo $perproduk['kd_ternak'];?>">
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

          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="container-fluid bg-light" style="margin-top: 30px;">
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
        <li><a class="text-white" style="text-decoration: none;" href="">info@omahternak.id</a></li>
        <li><a class="text-white" style="text-decoration: none;" href="">omahternak.id</a></li>
        <li><a class="text-white" style="text-decoration: none;" href="">omahternak.id</a></li>
        <li><a class="text-white" style="text-decoration: none;" href="">omahternak.id</a></li>
        <li><a class="text-white" style="text-decoration: none;" href="">08988741766</a></li>
        <li><a class="text-white" style="text-decoration: none;" href="">omahternakid</a></li>
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
