<?php
include ("koneksi.php");

if(isset($_POST['simpan'])){

    $kode_barang = $_POST['kode_barang'];
    $nama = $_POST['nama'];
    $genre = $_POST['genre'];
    $tanggal = $_POST['tanggal'];
    $penerbit = $_POST['penerbit'];
    $jumlah_halaman = $_POST['jumlah_halaman'];

    $sql =  "INSERT INTO barang (kode_barang, nama, genre, tanggal, penerbit, jumlah_halaman) VALUE ('$kode_barang', '$nama', '$genre', '$tanggal', '$penerbit', '$jumlah_halaman')";
    $query = mysqli_query($db, $sql);

    if ($query){
        header('location: list.php?status-sukses');
    }else{
        header('location: list.php?status-gagal');
    }
} else {
    die ("Akses dilarang");
}
?>