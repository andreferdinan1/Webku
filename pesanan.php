<?php 
    include('koneksi.php');// Memanggil file koneksi.php untuk menghubungkan ke database
    session_start();//memulai session
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
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
        <a class="navbar-brand text-white" href="admin.php"><strong>Bakso</strong> Solo Baru</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="admin.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_menu.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan.php">PESANAN</a>
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
      <div class="judul-pesanan mt-5">
       
        <h3 class="text-center font-weight-bold">DATA PESANAN PELANGGAN</h3>
        
      </div>
      <table class="table table-bordered" id="example">
        <thead class="thead-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">ID Pemesanan</th>
            <th scope="col">Tanggal Pesan</th>
            <th scope="col">Total Bayar</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
  <?php $nomor=1; ?> <!-- Inisialisasi variabel nomor untuk nomor urut pada tabel -->
  <?php 
    $ambil = mysqli_query($koneksi, 'SELECT * FROM pemesanan'); // Menjalankan query untuk mengambil data pemesanan dari tabel 'pemesanan' di database.
    $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC); // Mengambil semua baris hasil query dan menyimpannya sebagai array asosiatif dalam variabel $result.
  ?>
  <?php foreach($result as $result) : ?> <!-- Looping untuk menampilkan data pemesanan ke dalam tabel -->
    <tr>
      <th scope="row"><?php echo $nomor; ?></th> <!-- Menampilkan nomor urut pada tabel -->
      <td><?php echo $result["id_pemesanan"]; ?></td> <!-- Menampilkan ID pemesanan -->
      <td><?php echo $result["tanggal_pemesanan"]; ?></td> <!-- Menampilkan tanggal pemesanan -->
      <td>Rp. <?php echo number_format($result["total_belanja"]); ?></td> <!-- Menampilkan total belanja dalam format mata uang (Rupiah) -->
      <td>
        <a href="detail_pesanan.php?id=<?php echo $result['id_pemesanan'] ?>" class="badge badge-primary">Detail</a> <!-- Tautan untuk melihat detail pesanan dengan mengirimkan ID pemesanan melalui URL -->
        <a href="clear_pesanan.php?id=<?php echo $result['id_pemesanan'] ?>" class="badge badge-danger">Hapus Data</a> <!-- Tautan untuk menghapus data pesanan dengan mengirimkan ID pemesanan melalui URL -->
      </td>
    </tr>
    <?php $nomor++; ?> <!-- Increment nomor urut untuk baris selanjutnya -->
  <?php endforeach; ?> 
</tbody>

        </tbody>
      </table>
    </div>
  <!-- Akhir Menu -->
    

  <!-- Awal Footer -->
      <hr class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          
          </div>

          <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact">
          <label class="font-weight-bold">Follow Us </label>
          <a href="https://www.facebook.com/"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="https://www.instagram.com/anfd_____/?hl=id"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="https://www.tiktok.com/id-ID/"><img src="images/icon/tiktok.png" class="mr-3" data-toggle="tooltip" title="TikTok"></a>
          <a href="https://www.youtube.com/@andreferdinand5935/channels"><img src="images/icon/y.png" class="" data-toggle="tooltip" title="Youtube"></a>
        </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
  // Fungsi ini akan dijalankan setelah dokumen siap (ready)
  $(document).ready(function() {
      // Aktifkan DataTables pada elemen dengan id "example"
      $('#example').DataTable();
  });
</script>
  </body>
</html>
<?php } ?>