<html>
<head>
 <title>Tugas Pemrograman Web Lanjut</title>
</head>
<body style="font-family:arial">
 <center><h2>Tugas Pemrograman Web Lanjut</h2></center>
 <hr />
 <b>Tambah Data Baru</b>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="100%" border="0">
            <tr> 
				<td>Id Barang</td>
				<td><input type="text" name="id_barang" size="50" required></td>
			</tr>
			<tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" size="50" required></td>
            </tr>
            <tr> 
                <td>Harga Barang</td>
                <td><input type="text" name="harga_barang" size="50" required></td>
            </tr>
            <tr> 
                <td>Stock Barang</td>
                <td><input type="text" name="stock_barang" size="50" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="+ Tambahkan"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
		$id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $harga_barang = $_POST['harga_barang'];
        $stock_barang = $_POST['stock_barang'];

        // include database connection file
        include "barang/koneksi.php";

  $tambah_barang = "insert into barang values('','$id_barang','$nama_barang','$harga_barang','$stock_barang')";
     $kerjakan=mysqli_query($mysqli, $tambah_barang);
     if(!$kerjakan)
     {
     // Show message when user added
     echo "Barang berhasil ditambahkan. <a href='menu.php'>Lihat Data Barang</a>";
     }
     else
      {
      echo "Gagal terhubung";
     }
    }
    ?>
</body>
</html>