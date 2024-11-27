<div class="content">
    <h2>Produk</h2>
    <a href="produk_tambah.php" class="btn-tambah">Tambah Produk</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM produk");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?= htmlspecialchars($data['nama_produk']) ?></td>
                    <td><?= htmlspecialchars($data['harga']) ?></td>
                    <td><?= htmlspecialchars($data['stock']) ?></td>
                    <td class="aksi">
                        <a href="produk_ubah.php?id=<?= $data['id_produk'] ?>" class="btn-edit">Edit</a>
                        <a href="produk_hapus.php?id=<?= $data['id_produk'] ?>" class="btn-hapus">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>