<?php
include 'koneksi.php';
if(isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $level = 'admin';

    $masuk = mysqli_query($koneksi, "insert into user(nama,username,password,level) values('$nama','$username','$password','$level')");

    if($masuk) {
        echo '<script>alert("Selamat Anda Menjadi Admin"); location.href="login.php"</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="isi_page">
  <div class="form">
    <form method="post">
      <input name="nama" type="text" placeholder="Nama Lengkap"/>
      <input name="username" type="text" placeholder="Username"/>
      <input name="password" type="password" placeholder="Password"/>
      <button>Daftar</button>
      <p class="link">Sudah punya akun? <a href="login.php">Masuk</a></p>
    </form>
  </div>
</div>
</body>
</html>