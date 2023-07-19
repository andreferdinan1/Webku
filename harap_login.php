<?php
// Memulai sesi
session_start();

// Mendapatkan nilai dari parameter 'id_menu' yang dikirimkan melalui metode GET
$id_menu = $_GET['id_menu'];

// Memeriksa apakah id_menu sudah ada dalam array pesanan sesi
if (isset($_SESSION['pesanan'][$id_menu])) {
	// Jika sudah ada, tambahkan jumlah pesanan produk dengan id_menu tersebut
	$_SESSION['pesanan'][$id_menu] += 1;
} else {
	// Jika belum ada, tambahkan produk baru dengan jumlah pesanan 1
	$_SESSION['pesanan'][$id_menu] = 1;
}

// Menampilkan pesan alert "Harap LOGIN Terlebih Dahulu"
echo "<script>alert('Harap LOGIN Terlebih Dahulu');</script>";

// Mengarahkan pengguna kembali ke halaman login.php
echo "<script>location= 'login.php'</script>";
?>
