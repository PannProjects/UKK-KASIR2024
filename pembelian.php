<div class="content">
    <h2>Pembelian</h2>
    <a href="pembelian_tambah.php" class="btn-tambah">Tambah Pembelian</a>
    <table class="table">
        <thead>
            <tr>
                <th>Pelanggan</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM penjualan left join pelanggan on pelanggan.id_pelanggan = penjualan.id_pelanggan");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?= htmlspecialchars($data['nama_pelanggan']) ?></td>
                    <td><?= htmlspecialchars($data['total_harga']) ?></td>
                    <td class="aksi">
                        <a href="pembelian_detail.php?id=<?= $data['id_penjualan'] ?>" class="btn-edit">Detail</a>
                        <a href="pembelian_hapus.php?id=<?= $data['id_penjualan'] ?>" class="btn-hapus">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>