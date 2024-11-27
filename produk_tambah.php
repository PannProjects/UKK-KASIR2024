<?php
require 'koneksi.php';
if(isset($_POST['nama_produk'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];

    $query = mysqli_query($koneksi, "insert into produk(nama_produk, harga, stock) values('$nama_produk',' $harga', '$stock')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="css/mesin.css">
</head>
<body>
    <div class="content">
    <h2>Tambah Produk</h2>
    <a href="index.php?page=produk" class="btn-tambah">Kembali</a>
    <form method="post">
        <table class="table">
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Stock</td>
                <td>:</td>
                <td><input type="number" name="stock"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>