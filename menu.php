<?php 
include_once('barang/koneksi.php')
 ?>
<html>
<head>
<title>Toko Sembako</title>
 <style>
 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
 </style>
</head>
<body style="font-family:arial">
 <center><h2>Tugas Pemrograman Web Lanjut</h2></center>
 <hr />
 <a href="tambah.php">+ Tambah Data Baru</a><br /><br />
 <b>Data Barang</b>
 <table style="width:100%" class="table1">
  <tr>
   <th>No</th>
   <th>Id</th>
   <th>Nama</th>
   <th>Harga</th>
   <th>Stock</th>
   <th colspan=2><center>Opsi</center></th>
  </tr>
  
  <?php 
  include "barang/koneksi.php";
  $no = 1;
  $data = mysqli_query($mysqli,"select * from barang");
  while($r = mysqli_fetch_array($data)){
   $id_barang = $r['id_barang'];
   $nama_barang = $r['nama_barang'];
   $harga_barang = $r['harga_barang'];
   $stock_barang = $r['stock_barang'];
        ?>
  <tr><td><?php echo $no++; ?></td>
   <td><?php echo $r ['id_barang'] ?></td>
   <td><?php echo $r ['nama_barang']; ?></td>
   <td><?php echo $r ['harga_barang']; ?></td>
   <td><?php echo $r ['stock_barang']; ?></td>
  <td align=right width=70px><a href="edit.php?id=<?php echo $id_barang;?>">Edit</a></td>
  <td align=right width=70px><a href="hapus.php?id=<?php echo $id_barang;?>">Hapus</a></td>
  </tr>
  <?php 
  }
  ?>
 </table> 
</body>
</html>