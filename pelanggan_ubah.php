<?php
$id = $_GET['id'];
require 'koneksi.php';
if(isset($_POST['nama_pelanggan'])) {
    $nama = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];

   $query = mysqli_query($koneksi, "update pelanggan set nama_pelanggan='$nama', alamat='$alamat', no_telepon='$no_telepon' where id_pelanggan='$id'");
}
 $query = mysqli_query($koneksi, "select * from pelanggan where id_pelanggan=$id");
    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
    <link rel="stylesheet" href="css/mesin.css">
</head>
<body>
    <h2>Edit Pelanggan</h2>
    <a href="index.php?page=pelanggan">Kembali</a>
    <form method="post">
        <table>
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td><input type="text" value="<?php echo $data['nama_pelanggan']; ?>" name="nama_pelanggan"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" value="<?php echo $data['alamat']; ?>" name="alamat"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input type="number" value="<?php echo $data['no_telepon']; ?>" name="no_telepon"></td>
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
</body>
</html>