<?php
require 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "delete from penjualan where id_penjualan=$id");
$query = mysqli_query($koneksi, "delete from detail_penjualan where id_produk=$id");
header('location:index.php?page=pembelian');
?>