<?php
require 'koneksi.php';
$id = $_GET['id'];
$query =mysqli_query($koneksi, "select * from penjualan left join pelanggan on pelanggan.id_pelanggan = penjualan.id_pelanggan where id_penjualan=$id");
$data = mysqli_fetch_array($query);
?>

<div class="content">
    <h2>Detail Pembelian</h2>
    <a href="index.php?page=pembelian" class="btn-tambah">Kembali</a>
    <form method="post">
        <table class="table">
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td>
                    <?php echo $data['nama_pelanggan']; ?>
                </td>
            </tr>
            <?php
            $pro = mysqli_query($koneksi, "SELECT * FROM detail_penjualan left join produk on produk.id_produk = detail_penjualan.id_produk where id_penjualan=$id");
            while($produk = mysqli_fetch_array($pro)) {
            ?>
            <tr>
                <td><?php echo $produk['nama_produk']; ?></td>
                <td>:</td>
                <td>
                    Harga Satuan : <?php echo $produk['harga']; ?><br>
                    Jumlah : <?php echo $produk['jumlah_produk']; ?><br>
                    Sub Total : <?php echo $produk['sub_total']; ?><br>
                    Total : <?php echo $data['total_harga']; ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </form>
</div>