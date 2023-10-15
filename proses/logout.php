<?php
// Sisipkan file konfigurasi
require_once('../includes/config.php');

// Hapus semua data sesi
session_destroy();

// Arahkan kembali ke halaman login
header('Location: ../pages/login.php');
exit();
?>
