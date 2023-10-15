<?php
// Sisipkan file konfigurasi
require_once('/Belajar-PHP/includes/config.php');

// Cek apakah form login telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Jika username=admin, password=password
    if ($username === 'Afriqil' && $password === 'wildan') {
        // Jika sesuai, simpan username dalam sesi
        $_SESSION['username'] = $username;

        // Arahkan ke halaman listing produk
        header('Location: /Belajar-PHP/pages/dashboard.html');
        exit();
    } else {
        // Jika tidak sesuai, tampilkan pesan error
        echo 'Username atau password salah.';
    }
}
?>
