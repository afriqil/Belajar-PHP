<?php
// Sisipkan file konfigurasi
require_once('/Belajar-PHP/includes/config.php');

// Hapus semua data sesi
session_destroy();

// Arahkan kembali ke halaman login
header('Location: /Belajar-PHP/pages/login.html');
exit();
?>
