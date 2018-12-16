<?php 
session_start();
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
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
		<img class="mx-auto" src="icon/omahternak.png" style="height: 60px;">
	</div>
	<h5 style="color:#00c300; text-align: center; margin-top:15px; margin-bottom: 15px;"><strong>Silahkan Login dengan akun anda</strong></h5>
	<div class="row">
		<div class="col-xs-12 col-md-4 col-lg-4 card shadow p-3 mb-5 bg-white rounded mx-auto">
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