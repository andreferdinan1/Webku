<?php
// Memulai sesi
session_start();

// menghapus semua data sesi yang telah dibuat
session_destroy();

// Mengarahkan pengguna kembali ke halaman login.php setelah sesi dihapus
header('location: login.php');
?>
