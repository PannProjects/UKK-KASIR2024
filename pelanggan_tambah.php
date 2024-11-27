<?php
require 'koneksi.php';
if(isset($_POST['nama_pelanggan'])) {
    $nama = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];

    $query = mysqli_query($koneksi, "insert into pelanggan(nama_pelanggan, alamat, no_telepon) values('$nama',' $alamat', '$no_telepon')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <link rel="stylesheet" href="css/mesin.css">
</head>
<body>
    <div>
    <h2>Tambah Pelanggan</h2>
    <a href="index.php?page=pelanggan">Kembali</a>
    <form method="post">
        <table>
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td><input type="text" name="nama_pelanggan"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input type="number" name="no_telepon"></td>
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