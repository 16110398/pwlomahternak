<?php 
session_start();
$kd_ternak = $_GET['id'];

if (isset($_SESSION['keranjang'][$kd_ternak])) 
{
	$_SESSION['keranjang'][$kd_ternak]+=1;
}
else
{
	$_SESSION['keranjang'][$kd_ternak] = 1;
}

//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

echo "<script>alert('Ternak telah masuk ke keranjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";

?>