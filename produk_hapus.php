<?php
require 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "delete from produk where id_produk=$id");
header('location:index.php?page=produk');
?>