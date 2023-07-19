<?php
// Konfigurasi koneksi ke database
$host = "localhost"; // Nama host database, biasanya "localhost" jika berjalan di mesin lokal
$user = "root"; // Nama pengguna database, dalam kasus ini "root" karena umum digunakan di lingkungan pengembangan
$pass = ""; // Kata sandi pengguna database, dalam kasus ini kosong karena pada umumnya pengguna "root" tidak memiliki kata sandi
$db = "dbpemesanan"; // Nama database yang ingin dihubungkan

// Membuat koneksi ke database menggunakan mysqli_connect()
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Memeriksa apakah koneksi berhasil dibuat
if (!$koneksi) {
	// Jika koneksi gagal, tampilkan pesan error dan hentikan eksekusi skrip menggunakan die()
	die("Koneksi Gagal: " . mysqli_connect_error());
}
?>
