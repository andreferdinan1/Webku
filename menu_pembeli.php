<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>

<!doctype html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="images/Icon/2.png" type="image/png" >
    <title>Rumah Makan Padang</title>
  </head>
  <body>
  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">Rumah Makan Padang</span></h1>
          <hr>
          <p class="lead font-weight-bold">Silahkan Pesan Menu Sesuai Keinginan Anda <br> 
          Enjoy Your Meal</p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="user.php"><strong>Rumah Makan</strong> Padang</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="user.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="menu_pembeli.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan_pembeli.php">PESANAN ANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="index.php">LOGOUT</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->
      <div class="container">
        <div class="row mt-3">

        <?php
// Memasukkan file koneksi.php yang berisi konfigurasi koneksi ke database
include('koneksi.php');

// Melakukan query ke tabel 'produk' untuk mengambil semua data
$query = mysqli_query($koneksi, 'SELECT * FROM produk');

// Mengambil semua hasil query sebagai array asosiatif
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!-- Melakukan perulangan untuk setiap data hasil query yang ditemukan -->
<?php foreach ($result as $product) : ?>
  <div class="col-md-3 mt-4">
    <div class="card border-dark">
      <!-- Menampilkan gambar produk dari kolom 'gambar' di tabel 'produk' -->
      <img src="images/<?php echo $product['gambar'] ?>" class="card-img-top" alt="...">

      <div class="card-body">
        <!-- Menampilkan nama menu dari kolom 'nama_menu' di tabel 'produk' -->
        <h5 class="card-title font-weight-bold"><?php echo $product['nama_menu'] ?></h5>
        <!-- Menampilkan harga dari kolom 'harga' di tabel 'produk' dengan format rupiah -->
        <label class="card-text harga"><strong>Rp.</strong> <?php echo number_format($product['harga']); ?></label><br>
        <!-- Membuat tautan untuk membeli produk dengan menyertakan id_menu sebagai parameter di URL -->
        <a href="beli.php?id_menu=<?php echo $product['id_menu']; ?>" class="btn btn-success btn-sm btn-block">BELI</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>

         </div> 
      </div>
  <!-- Akhir Menu -->

  <!-- Awal Footer -->
  <hr class="footer">
        <div class="row card-body">
          <div class="col-md-6">         
          </div>
          <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact mr-5">
          <label class="font-weight-bold">Follow Us </label>
          <a href="https://www.facebook.com/"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="https://www.instagram.com/anfd_____/?hl=id"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="https://www.tiktok.com/id-ID/"><img src="images/icon/tiktok.png" class="mr-3" data-toggle="tooltip" title="TikTok"></a>
          <a href="https://www.youtube.com/@andreferdinand5935/channels"><img src="images/icon/y.png" class="" data-toggle="tooltip" title="Youtube"></a>
        </div>
          </div>
        </div>
      <div class="copyright text-center">
            <strong>Copyright</strong> <i class="far fa-copyright"></i> 2023 -  Designed by Andre Ferdinan</p>
          </div>
  <!-- Akhir Footer -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>
<?php } ?>