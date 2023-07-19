<?php
// Memulai sesi
session_start();

// Mendapatkan nilai dari parameter 'id_menu' yang dikirimkan melalui metode GET
$id_menu = $_GET["id_menu"];

// Menghapus data produk dari array pesanan berdasarkan id_menu tertentu
unset($_SESSION["pesanan"][$id_menu]);

// Menampilkan pesan alert "Produk telah dihapus"
echo "<script>alert('Produk telah dihapus');</script>";

// Mengarahkan pengguna kembali ke halaman pesanan_pembeli.php setelah produk dihapus
echo "<script>location= 'pesanan_pembeli.php'</script>";
?>
