<?php
include 'koneksi.php';
if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ngecek = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");

    if(mysqli_num_rows($ngecek) > 0) {
        $data = mysqli_fetch_array($ngecek);
        $_SESSION['user'] = $data;
        echo '<script>alert("Selamat Datang :3"); location.href="index.php"</script>';
    }else{
        echo '<script>alert("Coba Lagi");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="isi_page">
  <div class="form">
    <form method="post">
      <input name="username" type="text" placeholder="Username"/>
      <input name="password" type="password" placeholder="Password"/>
      <button>Masuk</button>
      <p class="link">Belum punya akun? <a href="register.php">Buat akun</a></p>
    </form>
  </div>
</div>
</body>
</html>