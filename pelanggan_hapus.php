<?php
require 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "delete from pelanggan where id_pelanggan=$id");
header('location:index.php?page=pelanggan');
?>