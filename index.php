<?php
include 'koneksi.php';
if(!isset($_SESSION['user'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="css/clerk.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKK RPL 2 (Pandu Setya Wijaya)</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="judul">Kasir Gaul</div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>

    <div class="sidebar">
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="?page=pelanggan">Pelanggan</a></li>
            <li><a href="?page=produk">Produk/Barang</a></li>
            <li><a href="?page=pembelian">Pembelian</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <main>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        include $page . '.php';
        ?>
    </main>
</body>
</html>