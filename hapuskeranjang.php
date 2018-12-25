<?php 
session_start();

$kd_ternak = $_GET['id'];
unset($_SESSION['keranjang'][$kd_ternak]);

echo "<script>alert('produk dihapus dari keranjang');</script>";
echo "<script>location='index.php?halaman=keranjang';</script>";

 ?>