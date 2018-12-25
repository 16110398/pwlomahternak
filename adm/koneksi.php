<?php 
$koneksi = mysqli_connect("localhost","root","","l_admin");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>