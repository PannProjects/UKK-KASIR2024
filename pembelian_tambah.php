<?php
require 'koneksi.php';
if (isset($_POST['id_pelanggan'])) {
    
    $id_pelanggan = $_POST['id_pelanggan'];
    $produk = $_POST['produk'];
    $total = 0;

    $query = mysqli_query($koneksi, "INSERT INTO penjualan(id_pelanggan) VALUES ('$id_pelanggan')");

    $result = mysqli_query($koneksi, "SELECT * FROM penjualan ORDER BY id_penjualan DESC");
    $idTerakhir = mysqli_fetch_array($result);
    $id_penjualan = $idTerakhir['id_penjualan'];

    foreach ($produk as $key => $val) {
        if ($val > 0) {
            $result = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$key'");
            $pr = mysqli_fetch_array($result);

            $sub = $val * $pr['harga'];
            $total += $sub;

            $query = mysqli_query($koneksi, "INSERT INTO detail_penjualan(id_penjualan, id_produk, jumlah_produk, sub_total) VALUES ('$id_penjualan', '$key', '$val', '$sub')");
            
            $updateProduk = mysqli_query($koneksi, "UPDATE produk SET stock = stock - $val WHERE id_produk='$key'");
        }
    }

    $query = mysqli_query($koneksi, "UPDATE penjualan SET total_harga = $total WHERE id_penjualan = $id_penjualan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
    <link rel="stylesheet" href="css/mesin.css">
</head>
<body>
    <div class="content">
    <h2>Pembelian</h2>
    <a href="index.php?page=pembelian" class="btn-tambah">Kembali</a>
    <form method="post">
        <table class="table">
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td>
                    <select name="id_pelanggan">
                        <?php
                        $p = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                        while ($pel = mysqli_fetch_array($p)) {
                            ?>
                            <option value="<?php echo $pel['id_pelanggan']; ?>"><?php echo $pel['nama_pelanggan']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <?php
            $pro = mysqli_query($koneksi, "SELECT * FROM produk");
            while ($produk = mysqli_fetch_array($pro)) {
            ?>
            <tr>
                <td><?php echo $produk['nama_produk'] . " : " . $produk['stock']; ?></td>
                <td>:</td>
                <td><input type="number" value="0" max="<?php echo $produk['stock']; ?>" name="produk[<?php echo $produk['id_produk']; ?>]"></td>
            </tr>
            <?php
            }
            ?>
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