<?php
$id = $_GET['id'];
require 'koneksi.php';
if(isset($_POST['nama_produk'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];

   $query = mysqli_query($koneksi, "update produk set nama_produk='$nama_produk', harga='$harga', stock='$stock' where id_produk='$id'");
}
 $query = mysqli_query($koneksi, "select * from produk where id_produk=$id");
    $data = mysqli_fetch_array($query);
?>

<div>
    <h2>Data Pelanggan</h2>
    <a href="index.php?page=produk">Kembali</a>
    <form method="post">
        <table>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" value="<?php echo $data['nama_produk']; ?>" name="nama_produk"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" value="<?php echo $data['harga']; ?>" name="harga"></td>
            </tr>
            <tr>
                <td>Stock</td>
                <td>:</td>
                <td><input type="number" value="<?php echo $data['stock']; ?>" name="stock"></td>
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