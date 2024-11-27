<div class="content">
        <div class="card-container">
            <div class="card">
                <div class="card-title"><?php echo mysqli_num_rows(mysqli_query($koneksi, "select * from pelanggan")); ?></div>
                <div class="card-content">Total Pelanggan</div>
            </div>
            <div class="card">
                <div class="card-title"><?php echo mysqli_num_rows(mysqli_query($koneksi, "select * from produk")); ?></div>
                <div class="card-content">Total Produk</div>
            </div>
            <div class="card">
                <div class="card-title"><?php echo mysqli_num_rows(mysqli_query($koneksi, "select * from penjualan")); ?></div>
                <div class="card-content">Total Pembelian</div>
            </div>
            <div class="card">
                <div class="card-title"><?php echo mysqli_num_rows(mysqli_query($koneksi, "select * from user")); ?></div>
                <div class="card-content">Total User</div>
            </div>
        </div>
    </div>