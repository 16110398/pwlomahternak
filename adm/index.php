
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

<html>
<head>
    <title>Desain Form Login Dengan Css</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Sign In</h2>
        </div>
        <div class="artikel">
            <form method="post" action="cek_login.php">
                <div class="grup">
                    <input type="text" name="username" placeholder="Masukkan username">
                </div>
                <div class="grup">
                    <input type="password" name="password" placeholder="Masukkan password">
                </div>
                <div class="grup">
                    <input type="submit" value="Sign In">
                </div>
            </form>
        </div>
    </div>
</body>
</html>