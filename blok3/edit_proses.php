<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $kode_barang    = $_POST['kode_barang'];
    $nama           = $_POST['nama'];
    $genre          = $_POST['genre'];
    $tanggal        = $_POST['tanggal'];
    $penerbit       = $_POST['penerbit'];
    $jumlah_halaman = $_POST['jumlah_halaman'];

    $sql = "UPDATE barang SET nama='$nama', genre='$genre', tanggal='$tanggal', penerbit='$penerbit', jumlah_halaman='$jumlah_halaman' WHERE kode_barang= $kode_barang";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: list.php');
    } else {
        die("Gagal menyimpan");
    }

} else {
    die ("Akses dilarang");
}

?>