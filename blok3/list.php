<?php include ("koneksi.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data barang</title>
        <link rel="stylesheet" href="list.css">
    </head>
<body>
    <h1>GALAKSI PRO MAX</h1>
    <br>
    <a href="form_tambah.php">Tambah buku</a>
    <br>
    <a href="index.php">Kembali</a>
    <br>
    <form action="list.php" method="get">
        <label>Cari :</label>
        <input type = "text" name="cari">
        <input type = "submit" value="cari">
    </form>
    <table border="1">
        <tr>
        <th>Kode Barang</th></th>
        <th>Judul</th>
        <th>Genre</th>
        <th>Tanggal Terbit</th>
        <th>Penerbit</th>
        <th>Halaman</th>
        <th>Opsi</th>
        </tr>

        <?php
          if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
              $query = "SELECT * FROM barang WHERE kode_barang like '%$cari%' OR nama like '%$cari' OR genre like '%$cari%' OR tanggal like '%$cari%' OR penerbit like '%$cari' OR jumlah_halaman like '%$cari'";
          }else{
              $query = "SELECT * FROM barang";
          }
              $query = mysqli_query($db, $query);
            while ($barang = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>". $barang ['kode_barang']."</td>";
            echo "<td>". $barang ['nama']."</td>";
            echo "<td>". $barang ['genre']."</td>";
            echo "<td>". $barang ['tanggal']."</td>";
            echo "<td>". $barang ['penerbit']."</td>";
            echo "<td>". $barang ['jumlah_halaman']."</td>";
            echo "<td>";
            echo "<a href='form_edit.php?kode_barang=".$barang['kode_barang'] . "'>EDIT</a> | ";
            echo "<a href='delete.php?kode_barang=".$barang['kode_barang'] . "'>HAPUS</a> | ";
            echo "</td>";

        }
        ?>
        </div>
    </table>
</body>
</html>
