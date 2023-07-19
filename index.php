
<!doctype html>
<html lang="en">
  <head>
    <style>/**style css */
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&family=Ubuntu&display=swap');
    
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

footer  {
	background-color: #333333;
}
.row{
	display: flex;
	justify-content: space-between;
	padding: 25px 100px;
}


.footer-col ul{
	list-style: none;
}

.footer-col h4{
	color: white;
	margin-bottom: 25px;
	font-size: 20px;
	position: relative;
	font-family: 'Ubuntu', sans-serif;
}

.footer-col h4::before{
	content: '';
	width: 30px;
	height: 2px;
	background-color: #e91e64;
}

.footer-col ul li{
	padding: 5px 0;
}

.footer-col ul li a{
	color: white;
	text-decoration: none;
	font-size: 14px;
	opacity: 0.7;
	transition: 0.5s;
}

.footer-col ul li a:hover{
	opacity: 1;
  color: #e91e64;
}

.footer-col input{
	border: none;
	width: 200px;
	height: 20px;
	display: block;
	padding-left: 5px;
	margin: 15px 0;
  font-size: 10px;
}

.footer-col .inputSubmit{
	  padding: 0 10px;
    background-color: #e91e64;
    border: none;
    color: white;

}
.col p{
    color: white;

}
.row hr{
    opacity: 0.7s;
    
}

.row .socialIcons a{
    display: inline-block;
    color: white;
    font-size: 15px;
    margin: 0 15px;
    transition: 0.5s;
}
.row .socialIcons a:hover{
    color: #e91e64;
}
/** footer */
@media(max-width: 600px){
    footer .row{
        flex-direction: column;
        padding: 20px 30px;
    }
    footer .footer-col ul{
        margin-left: 20px;
        margin-bottom: 20px;
    }
    .footer-col input{
        width: 100%;
    }
}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="images/Icon/2.png" type="image/png" >
    <title>RUMAH MAKAN PADANG</title>
  </head>
  <body>

  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center ">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">RUMAH MAKAN PADANG</span></h1>
          
          <p class="lead font-weight-bold">Silahkan Pesan Menu Sesuai Keinginan Anda <br> 
          Enjoy Your Meal</p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-dark img-fluid mb-3">
        <div class="container">
        <a class="navbar-brand text-white" ><strong>Rumah Makan</strong> Padang</a>
        <button class="navbar-toggler bg-light" id="hamburger-menu" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="menu.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="login.php">LOGIN</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->    
  <div class="row">
          <div class="col-lg-3">
            <div class="card">
              
              <div class="card-body">
                <h5 class="card-title bg-danger text-white text-center py-2">Pemesanan</h5>
                <p class="card-text">Klik tombol dibawah ini jika anda ingin memesan</p>
                <a href="login.php" class="btn btn-warning">Pesan</a>
                

              </div>
            </div>

            </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title bg-danger text-white text-center py-2">Rendang</h5>
                <small class="text-muted text-end text-right"><p class="m-0">Diposting pada 11.04 WIB, 28 April 2023</p></small>
                <img class="img-fluid" src="images/r.jpg">
                <p class="card-text mt-2">Mengapa banyak orang menyukai rendang?
                                    Masakan Rendang Padang banyak menggunakan rempah-rempah yang kaya rasa sebagai bumbu masakannya. Alasan kenapa banyak orang luar negeri menyukai rendang adalah karena bumbu rendang nya sendiri yang sulit dicari diluar Indonesia. Selain itu rendang juga menggunakan bumbu rempah yang kaya rasa dan aroma.</p>
                
              </div>
              
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title bg-danger text-white text-center py-2">Tambusu</h5>
                <ul class="list-group list-group-flush">
                <img class="img-fluid" src="images/tambusu.jpg">
                <P class="card-text mt-2">Gulai tambusu adalah jenis gulai yang memanfaatkan usus sapi atau usus kerbau sebagai bahan utamanya. Usus tersebut kemudian diisi dengan olahan tahu, telur ayam dan telur bebek.</P>
                </ul>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title bg-danger text-white text-center py-2">Jadwal Buka</h5>
              <img class="img-fluid" src="images/background/sate-padang.jpeg " width="100%">
              <h6 class="text-center fw-bold mt-2">Jadwal Buka</h6>
              <p class="text-center">Senin - Sabtu</p>
              <p class="text-center">10.00 - 23.00</p>
            </div>
          </div>
          </div>
          
        </div>
        
  <!-- Akhir Menu -->
     
  <!-- Awal Footer -->
  <footer>    
        <div class="row">
          <div class="footer-col">
            <h4>Rumah Makan Padang</h4>
            <ul>
              <li><a href="index.php">About us</a></li>
              <li><a href="https://goo.gl/maps/PckBYeTpELEPNFqq6">Location</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Get Help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="login.php">Shipping</a></li>
              <li><a href="login.php">Returns</a></li>
              <li><a href="login.php">Order status</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Menu List</h4>
            <ul>
              <li><a href="menu.php">Food</a></li>
              <li><a href="menu.php">Drink</a></li>
              

            </ul>
          </div>
          <div class="footer-col">           
            <h4>Newsletter</h4>
            <form action="">
              <input type="text" placeholder="Your Name" class="inputName">
              <input type="email" placeholder="Enter Company Email" class="inputEmail">
              <input type="submit" value="Submit" class="inputSubmit">

            </form>
            </div>
          </div>
          
          <div class="row">
            <div class="col text-center">
                <p>Copyright &#169; 2023 -  Designed by Andre Ferdinan</p>
            </div>
            <div class="socialIcons">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"   title="Facebook"></i></a>
            <a href="https://www.instagram.com/anfd_____/?hl=id"><i class="fa-brands fa-instagram"   title="Instagram"></i></a>
            <a href="https://www.tiktok.com/id-ID/"><i class="fa-brands fa-tiktok"   title="Tiktok"></i></a>
            <a href="https://www.youtube.com/@andreferdinand5935/channels"><i class="fa-brands fa-youtube"   title="Youtube"></i></a>
            </div>
          </div>
          
         
        </div>
      </footer>   
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
<?php  ?>