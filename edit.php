<?php 
include "barang/koneksi.php";

	$id = $_GET['id'];
	

	$result=mysqli_query($mysqli,"select * from barang WHERE id_barang=$id");
	
    while($r = mysqli_fetch_array($result)){
   $id_barang = $r['id_barang'];
   $nama_barang = $r['nama_barang'];
   $harga_barang = $r['harga_barang'];
	$stock_barang = $r['stock_barang'];}

    if(isset($_POST['update']))
{   
    $id = $_POST['id'];
	$id_barang = $_POST['id_barang'];
    $nama_barang=$_POST['nama_barang'];
    $harga_barang=$_POST['harga_barang'];
    $stock_barang=$_POST['stock_barang'];

    // update user data 
    $result = mysqli_query($mysqli, "UPDATE barang SET nama_barang='$nama_barang',harga_barang='$harga_barang',stock_barang='$stock_barang' WHERE id_barang='$id');

    // Redirect to homepage to display updated user in line
    header("Location: menu.php");
}
?>

<?php
    
?>


<html>
<head>
 <title>Tugas Pemrograman Web Lanjut</title>
</head>
<body style="font-family:arial">
 <center><h2>Tugas Pemrograman Web Lanjut</h2></center>
 <hr />
 <b>Edit Data Barang</b>
    <br/><br/>
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama Barang</td>
                <td><input type="text" size="50" name="nama_barang" value="<?php echo $nama_barang;?>"></td>
            </tr>
            <tr> 
                <td>Harga Barang</td>
                <td><input type="text" size="50" name="harga_barang" value="<?php echo $harga_barang;?>"></td>
            </tr>
            <tr> 
                <td>Stok Barang</td>
                <td><input type="text" size="50" name="stock_barang" value="<?php echo $stock_barang;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>