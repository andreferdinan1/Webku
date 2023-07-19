<?php
// Memanggil file koneksi.php untuk menghubungkan ke database
include('koneksi.php');

// Mengambil nilai dari parameter 'id' yang dikirim melalui metode GET
$id = $_GET['id'];

// Melakukan query DELETE untuk menghapus data pemesanan dengan id_pemesanan tertentu
$hapus = mysqli_query($koneksi, "DELETE FROM pemesanan WHERE id_pemesanan='$id'");

// Memeriksa apakah penghapusan data berhasil dilakukan
if ($hapus) {
	// Jika penghapusan data berhasil, alihkan pengguna kembali ke halaman pesanan.php
	header('location: pesanan.php');
} else {
	// Jika penghapusan data gagal, tampilkan pesan "Hapus data gagal"
	echo "Hapus data gagal";
}
?>
