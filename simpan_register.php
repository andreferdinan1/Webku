<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$password=$_POST["password"]; //untuk password digunakan enskripsi md5
$nama_lengkap=$_POST["nama_lengkap"];
$jenis_kelamin=$_POST["jenis_kelamin"];
$tanggal_lahir=$_POST["tanggal_lahir"];
$alamat=$_POST["alamat"];
$hp=$_POST["hp"];
$status=$_POST["status"];

$sql_check = "SELECT * FROM user WHERE username='$username'";
    $result_check = $koneksi->query($sql_check);
    if ($result_check->num_rows > 0) {
        echo '<script>alert("Username sudah terdaftar!"); window.location.href = "register.php";</script>';
        exit();
    }

//Menginput data ke tabel
  $hasil=mysqli_query($koneksi, "INSERT INTO user (username,password,nama_lengkap,jenis_kelamin,tanggal_lahir,alamat,hp,status) VALUES('$username','$password','$nama_lengkap','$jenis_kelamin','$tanggal_lahir','$alamat','$hp','$status')");

//Kondisi apakah berhasil atau tidak
  if ($hasil) 
  {
	echo "<script>
				alert('Anda Berhasil Registrasi !');
				document.location='login.php';
		  </script>";
  }
  else 
  {
	echo "<script>
				alert('Registrasi Anda Gagal !');
				document.location='register.php';
		  </script>";
  }

?>