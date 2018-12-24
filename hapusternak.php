<?php 
$hapusproduk=$koneksi->query("SELECT * FROM ternak WHERE kd_ternak='$_GET[id]'");
$hapus=$hapusproduk->fetch_assoc();
$fototernak = $hapus['foto'];
if (file_exists("foto_produk/$fototernak")) 
{
	unlink("foto_produk/$fototernak");
}

$koneksi->query("DELETE FROM ternak WHERE kd_ternak='$_GET[id]'");
echo "<script>alert('Ternak sudah dihapus');</script>";
echo "<script>location='index.php?halaman=profil&page=penjualan';</script>";
?>