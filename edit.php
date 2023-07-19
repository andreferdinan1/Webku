<?php
// Memanggil file koneksi.php untuk menghubungkan ke database
include('koneksi.php');

// Mendapatkan nilai dari form menggunakan metode POST
$id_menu = $_POST['id_menu'];
$nama_menu = $_POST['nama_menu'];
$jenis_menu = $_POST['jenis_menu'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$nama_file = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './upload/';

// Memindahkan file gambar yang diupload ke folder tujuan
move_uploaded_file($source, $folder.$nama_file);

// Melakukan query UPDATE untuk mengubah data produk dalam tabel berdasarkan id_menu tertentu
$edit = mysqli_query($koneksi, "UPDATE produk SET nama_menu='$nama_menu', jenis_menu='$jenis_menu', stok='$stok', harga='$harga', gambar='$nama_file' WHERE id_menu='$id_menu'");

// Memeriksa apakah proses edit berhasil dilakukan
if ($edit) {
    // Jika proses edit berhasil, alihkan pengguna kembali ke halaman daftar_menu.php
    header('location: daftar_menu.php');
} else {
    // Jika proses edit gagal, tampilkan pesan "Edit Menu Gagal"
    echo "Edit Menu Gagal";
}
?>
