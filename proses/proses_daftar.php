<?php
// Sisipkan file konfigurasi
require_once('/Belajar-PHP/includes/config.php');

// Cek apakah form pendaftaran telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Gantilah ini dengan logika penyimpanan data pengguna sesuai kebutuhan Anda
    // Contoh sederhana: Simpan data dalam variabel sesi (bukan cara yang aman)
    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    // Arahkan ke halaman login (Anda bisa memilih untuk mengarahkan ke halaman lain setelah pendaftaran berhasil)
    header('Location: /Belajar-PHP/pages/login.html');
    exit();
}
?>
