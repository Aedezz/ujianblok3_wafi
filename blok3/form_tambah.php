<!DOCTYPE html>
<html>
<head>
    <title>Tambah barang</title>
    <link rel="stylesheet" href="form_tambah.css">
</head>
<body>
    <h2>Penambahan buku baru</h2>
    <br>
    <a href="index.php">Kembali</a>
    <br>
    <h3>Tambah buku</h3>
    <form method="POST" action="tambah_proses.php">
        <table>
            <!-- <tr>
                <td>Kode barang</td>
                <td><input type="text" name="nama" placeholder="Kode barang" readonly></td>
            </tr> -->
            <tr>
                <td>Judul buku</td>
                <td><input type="text" name="nama" placeholder="Nama buku"></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td><input type="text" name="genre" placeholder="Genre buku"></td>
            </tr>
            <tr>
                <td>Tanggal Terbit</td>
                <td><input type="date" name="tanggal" placeholder="Tanggal Terbit"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" placeholder="Penerbit"></td>
            </tr>
            <tr>
                <td>Halaman</td>
                <td><input type="number" name="jumlah_halaman" placeholder="Halaman"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="Submit" value="SIMPAN" name="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>