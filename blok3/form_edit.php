<?php
include("koneksi.php");

if (!isset($_GET['kode_barang'])){
    header('Location: list.php');
}

$kode_barang = $_GET['kode_barang'];

$sql = "SELECT * FROM barang WHERE kode_barang=$kode_barang";
$query = mysqli_query ($db, $sql);
$barang = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah barang</title>
</head>
<body>
    <h2>Penambahan buku baru</h2>
    <br>
    <a href="index.php">Kembali</a>
    <br>
    <h3>Tambah buku</h3>
    <form method="POST" action="edit_proses.php">
        <input type="hidden" name="kode_barang" value="<?php echo $barang['kode_barang']?>">
        <table>
            <!-- <tr>
                <td>Kode barang</td>
                <td><input type="text" name="nama" placeholder="Kode barang" readonly></td>
            </tr> -->
            <tr>
                <td>Judul buku</td>
                <td><input type="text" name="nama" value= "<?php echo $barang ['nama']?>"></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td><input type="text" name="genre" value= "<?php echo $barang ['genre']?>"></td>
            </tr>
            <tr>
                <td>Tanggal Terbit</td>
                <td><input type="date" name="tanggal" value= "<?php echo $barang ['tanggal']?>"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" value= "<?php echo $barang ['penerbit']?>"></td>
            </tr>
            <tr>
                <td>Halaman</td>
                <td><input type="number" name="jumlah_halaman" value= "<?php echo $barang ['jumlah_halaman']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="Submit" value="SIMPAN" name="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>