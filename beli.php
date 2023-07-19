<?php 
// Memulai sesi
session_start();

// Mengambil nilai dari parameter 'id_menu' yang dikirim melalui metode GET
$id_menu = $_GET['id_menu'];

// Cek apakah pesanan dengan id_menu tertentu sudah ada di sesi
if (isset($_SESSION['pesanan'][$id_menu]))
{
	// Jika pesanan sudah ada, tambahkan jumlah pesanan dengan 1
	$_SESSION['pesanan'][$id_menu] += 1;
}
else 
{
	// Jika pesanan belum ada, tambahkan pesanan baru dengan jumlah 1
	$_SESSION['pesanan'][$id_menu] = 1;
}

// Tampilkan pesan bahwa produk telah masuk ke pesanan
echo "<script>alert('Produk telah masuk ke pesanan anda');</script>";

// Alihkan pengguna ke halaman 'pesanan_pembeli.php'
echo "<script>location= 'pesanan_pembeli.php'</script>";
?>
