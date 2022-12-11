<?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:login.php?belum_login");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
    <h2 class="form-title"> GALAKSI PRO MAX</h2> <br>
    <h5>Selamat datang, <?php echo $_SESSION['username'];?>! Anda telah login</h5>
    <form action="#">
        <div class="main-user">
        <a href="form_tambah.php">Tambah Buku</a><br>
        <a href="list.php">List Barang</a> <br>
        <a href="logout.php">LogOut</a>
        </div>            
    </form>
    </div>
</body>
</html>

