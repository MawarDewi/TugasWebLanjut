<?php
// include database connection file
include "barang/koneksi.php";


$id = $_GET['id'];


$result = mysqli_query($mysqli, "DELETE FROM barang WHERE id_barang=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:menu.php");
?>