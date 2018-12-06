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
	<link rel="icon" type="image/png" href="icon/logod-2.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" href="bootstrap/css/style.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<h5>Detail Produk Coming Soon</h5>
	<?php 
	echo "<pre>"; 
	print_r($ternak); 
	echo "</pre>";
	?>
</body>
</html>
