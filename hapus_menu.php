<?php
// Memanggil file koneksi.php untuk menghubungkan ke database
include('koneksi.php');

// Mendapatkan nilai dari parameter 'id_menu' yang dikirim melalui metode GET
$id_menu = $_GET['id_menu'];

// Melakukan query DELETE untuk menghapus data produk dari tabel berdasarkan id_menu tertentu
$hapus = mysqli_query($koneksi, "DELETE FROM produk WHERE id_menu='$id_menu'");

// Memeriksa apakah proses hapus berhasil dilakukan
if ($hapus) {
    // Jika proses hapus berhasil, alihkan pengguna kembali ke halaman daftar_menu.php
    header('location: daftar_menu.php');
} else {
    // Jika proses hapus gagal, tampilkan pesan "Hapus data gagal"
    echo "Hapus data gagal";
}
?>
