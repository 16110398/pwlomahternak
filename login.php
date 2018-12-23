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
	<title>Login Omahternak.id</title>
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
			   
			}

			.daftarp{
			    text-align: center;
			    color: #bdbcbc;
			    width: 50px;
			    margin: 10px auto 0;
			    background: #fff;
			    position: relative;
			    bottom: 23px;
			   
			}
			.btndaftar{
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
	<div class="container">
	<div class="row" style="margin-top: 25px;">
		<a href="http://omahternak.id" class="mx-auto"><img src="icon/omahternak.png" style="height: 60px;"></a>
	</div>
	<h5 style="color:#00c300; text-align: center; margin-top:15px; margin-bottom: 15px;"><strong>Silahkan Login dengan akun anda</strong></h5>
	<div class="row">
		<div class="col-xs-12 col-md-6 col-lg-4 card shadow p-3 mb-5 bg-white rounded mx-auto">
		<form method="post">
			<div class="form-group">
				<label for="email">Email :</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email anda">
			</div>
			<div class="form-group">
				<label for="pass">Password :</label>
				<input type="password" class="form-control" id="pass" name="password" placeholder="Masukkan password anda">
			</div>
			<div class="form-group">
				<input class="btn btn-success btn-block" type="submit" name="login" value="LOGIN">
			</div>
			<p>Belum punya akun?  <a style="color:green;" href="daftar.php">Daftar sekarang</a></p>
		</form>
		<div class="border-p"></div>
				<p class="daftarp"> ATAU </p>
			<div>
				<a href="#" style="text-decoration: none;"><button class="btn btn-default btn-block btndaftar btnloginsosmed" style="margin-bottom:10px;"><img src="icon/fblogo.png" style="float:left;">Daftar dengan Facebook</button></a>

				<a href="#" style="text-decoration: none;"><button class="btn btn-default btn-block btndaftar btnloginsosmed" "><img src="icon/glogo.png" style="float:left;">Daftar dengan Google</button></a>
			</div>
		</div>
		<?php
		if (isset($_POST["login"]))
			{
				$email=$_POST["email"];
				$password=md5($_POST["password"]);
				$loginuser=mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE email='$email' AND password='$password'");
				$validakun=$loginuser->num_rows;
				if ($validakun==1)
				{
					$akun=$loginuser->fetch_assoc();
					$_SESSION["pelanggan"]=$akun;
					$_SESSION["nama"]=$akun;
					echo "<script>alert('Anda sukses login');</script>";
					echo "<meta http-equiv='refresh' content='1;url=index.php'>";
				}
		else
			{
				echo "<script>alert('Anda gagal login, periksa akun anda!');</script>";
				echo "<script>location='login.php';</script>";
			}
		}
		?>
	</div>
</div>
</body>
</html>