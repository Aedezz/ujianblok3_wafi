<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "data_barang";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db){
    die ("Coba lagi" . mysqli_connect_error());
}
?>