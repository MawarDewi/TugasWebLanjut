<?php 
include 'koneksi.php';
$username = $_POST['nama_barang'];
$password = $_POST['id_barang'];

$query = mysqli_query($mysqli,"SELECT * from barang where nama_barang = '$username' and id_barang = '$password' ");
$result = mysqli_num_rows($query);

if($result > 0){
	header("location:../home/home.php");
}
else{
	header("location../index.php?pesan=error");
}

?>