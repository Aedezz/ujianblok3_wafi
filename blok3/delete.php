<?php

include("koneksi.php");

if(isset($_GET['kode_barang'])){
    $kode_barang    = $_GET['kode_barang'];

    $sql    = "DELETE FROM barang WHERE kode_barang=$kode_barang";
    $query  = mysqli_query($db, $sql);

    if($query){
        header('Location: list.php');
    } else {
        die("Gagal menghapus");
    }
} else {
    die("akses dilarang");
}

?>