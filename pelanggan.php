<div class="content">
    <h2>Pelanggan</h2>
    <a href="pelanggan_tambah.php" class="btn-tambah">Tambah Pelanggan</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM pelanggan");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?= htmlspecialchars($data['nama_pelanggan']) ?></td>
                    <td><?= htmlspecialchars($data['alamat']) ?></td>
                    <td><?= htmlspecialchars($data['no_telepon']) ?></td>
                    <td class="aksi">
                        <a href="pelanggan_ubah.php?id=<?= $data['id_pelanggan'] ?>" class="btn-edit">Edit</a>
                        <a href="pelanggan_hapus.php?id=<?= $data['id_pelanggan'] ?>" class="btn-hapus">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>