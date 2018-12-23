<?php 
session_start();
require_once 'koneksi.php';
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
	<title>Daftar Omahternak.id</title>
	<link rel="icon" type="image/png" href="icon/logod-2.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
	  	/*Button*/
			.border-p{
			    border-top: 1px solid;
			    color: #e1e1e1;
			    background: #fff;
			    margin-top: 30px;
			    width: 400px;
			}

			.daftarp{
			    text-align: center;
			    color: #bdbcbc;
			    width: 50px;
			    margin: 10px auto 0;
			    background: #fff;
			    position: relative;
			    bottom: 23px;
			    margin-left: 175px;
			}
			.btndaftar{
			    width: 400px;
			    height: 45px;
			    font-size: 18px;
			}

			.btnloginsosmed{
			    background: #eee;
			}

			.btnloginsosmed:hover{
			    background: #eee;
			    color: #00c300;
			}
		
	  </style>
</head>
<body>
	<div class="row" style="margin-top: 25px;">
		<a href="http://omahternak.id" class="mx-auto"><img src="icon/omahternak.png" style="height: 60px;"></a>
	</div>
	<h4 style="color:#00c300; text-align: center; margin-top: 25px; margin-bottom: 15px;"><strong>Daftar Akun Omahternak</strong></h4>
	<div class="row" style="margin-bottom: 10px;">
		<div style="align-items: center;" class="col-xs-12 col-md-4 col-lg-4 card shadow p-3 mb-5 bg-white rounded mx-auto">
		<form method="post">
			<div class="form-group">
				<label for="nama">Nama :</label>
				<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap anda" required="Masukkan Nama">
			</div>
			<div class="form-group">
			  <label for="gender">Jenis Kelamin :</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="jenis_kelamin" id="men" value="Laki-laki">
				<label class="form-check-label" for="men">Laki-laki</label>
				</div>
				<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="jenis_kelamin" id="women" value="Perempuan">
				<label class="form-check-label" for="women">Perempuan</label>
			</div>
			<div class="form-group">
				<br>
				<label for="email">Email :</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email anda" required="Masukkan email">
			</div>
			<div class="form-group">
				<label for="pass">Password :</label>
				<input type="password" class="form-control" id="pass" name="password" placeholder="Masukkan password anda" required="Masukan password">
			</div>
			<div class="form-group">
				<label for="telepon">Telepon :</label>
				<input type="number" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nomor telepon" required="Masukkan telepon">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat :</label>
				<textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
			</div>
			<div class="form-group">
				<p>Dengan klik daftar, kamu telah menyetujui <a style="color:green;" href="#">Aturan Penggunaan</a> dan <a style="color:green;" href="#">Kebijakan Privasi</a> dari Omahternak</p>
				<input class="btn btn-success btn-block" type="submit" name="daftar" value="DAFTAR">
			</div>
		</form>
		<div class="border-p"></div>
				<p class="daftarp"> ATAU </p>
			<div>
				<a href="daftarfb.php" style="text-decoration: none;"><button class="btn btn-default btn-block btndaftar btnloginsosmed" style="margin-bottom:10px;"><img src="icon/fblogo.png" style="float:left;">Daftar dengan Facebook</button></a>

				<a href="#" style="text-decoration: none;"><button class="btn btn-default btn-block btndaftar btnloginsosmed" "><img src="icon/glogo.png" style="float:left;">Daftar dengan Google</button></a>
				<p style="margin-left:70px;">Sudah punya akun? <a style="color:green;" href="login.php">Silahkan Login</a></p>
			</div>
		</div>
		<?php 
			if (isset($_POST['daftar'])) {
				$nama=$_POST['nama'];
				$email=$_POST['email'];
				$password=$_POST['password'];
				$password=md5($password);
				$jenis_kelamin=$_POST['jenis_kelamin'];
				$alamat=$_POST['alamat'];
				$telepon=$_POST['telepon'];

				$email_check = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE email = '$email'"));
				$nama_check = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE nama = '$nama'"));
				$nama_email_check = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE nama = '$nama' AND email = '$email'"));

				if ($nama_email_check > 0) {
					echo "<script>alert('Nama dan Email sudah digunakan!');</script>";
					echo "<meta http-equiv='refresh' content='1;url=daftar.php'>";
				}
				else if ($nama_check >0){
					echo "<script>alert('Nama sudah digunakan!');</script>";
					echo "<meta http-equiv='refresh' content='1;url=daftar.php'>";
				}
				else if ($email_check >0){
					echo "<script>alert('Email sudah digunakan!');</script>";
					echo "<meta http-equiv='refresh' content='1;url=daftar.php'>";
				}
				else{
					$con=mysqli_query($koneksi, "INSERT INTO pelanggan (nama, email, password, jenis_kelamin,alamat,telepon) VALUES ('$nama','$email','$password','$jenis_kelamin','$alamat','$telepon')") OR die("error");

				echo "<script>alert('Anda sukses mendaftar!');</script>";
				echo "<meta http-equiv='refresh' content='1;url=login.php'>";
				}
				

				
			}
		 ?>

	</div>
</body>
</html>