<?php 
// Memanggil file koneksi.php untuk menghubungkan ke database
include 'koneksi.php';
?>
  
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <link rel="shortcut icon" href="images/Icon/2.png" type="image/png" >
    
    <style>
      body{
        background-image: url("images/background/2.jpg");
        background-size: cover;
      }
      /*Laptop*/
      @media(max-width: 1366px){
        html{
          font-size: 100%;
        }
        .container{
          width: 500px;
          padding: 10px 10px;
          margin-top: 45%;
        }
      }
      /*Tablet*/
      @media(max-width: 880px){
        html{
          font-size: 100%;
        }
        .container{
          width: 350px;
          margin-top: 25%;
        }
      }
      /*Mobile Phone*/
      @media(max-width: 450px){
        html{
          font-size: 80%;
        }
        .container{
          margin-top: 45%;
          width: 250px;
        }
      }
    </style>
    <title>Halaman Login</title>
  </head>
  <body >
  <!-- Form Login --> 
  
    <div class="container">
      <div class="login">
      <h4 class="text-center text-light">FORM LOGIN</h4>
      <hr>
      <form method="POST" action="">
        <div class="form-group text-light">
          <label for="exampleInputEmail1">Username</label>
            <div class="input-group ">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
              </div>
              <input type="text"  class="form-control" placeholder="Masukkan Username" name="username" required>
            </div>
        </div>
        <div class="form-group text-light">
          <label for="exampleInputPassword1">Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
              </div>
              <input type="password" class="form-control" placeholder="Masukkan Password" name="password" required>
          </div>
        </div>
        <div class="">
        <button type="submit" name="submit" class="btn btn-primary btn-sm btn-block ">LOGIN</button>
        </div>
        <div class="mt-3" >
          <small><a href="register.php" class="text-primary">Belum Punya Akun ? Buat Akun Anda !</a></small>
        </div>
        
      </form>
  <!-- Akhir Form Login -->

  <!-- Eksekusi Form Login -->
  <?php
if (isset($_POST['submit'])) {
  // Mendapatkan nilai dari form login yang disubmit
  $user = $_POST['username'];
  $password = $_POST['password'];

  // Query untuk memilih tabel 'user' berdasarkan username dan password yang dimasukkan
  $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");

  // Mengambil hasil dari query sebagai array asosiatif
  $hasil = mysqli_fetch_array($cek_data);

  // Mendapatkan nilai status dan username dari hasil query
  $status = $hasil['status'];
  $login_user = $hasil['username'];

  // Mendapatkan jumlah baris hasil query
  $row = mysqli_num_rows($cek_data);

  // Pengecekan apakah login berhasil atau tidak
  if ($row > 0) {
    // Jika login berhasil, mulai sesi dan atur nilai 'login_user' dalam sesi
    session_start();
    $_SESSION['login_user'] = $login_user;

    // Berdasarkan status, arahkan pengguna ke halaman admin.php atau user.php
    if ($status == 'admin') {
      header('location: admin.php');
    } elseif ($status == 'user') {
      header('location: user.php');
    }
  } else {
    // Jika login gagal, tampilkan pesan alert dan arahkan pengguna kembali ke halaman login.php
    echo "<script>alert('Login Gagal Password atau username salah');</script>";
    echo "<script>location= 'login.php'</script>";
  }
}
?>

    </div>
    </div>
  <!-- Akhir Eksekusi Form Login -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  
  </body>
</html>