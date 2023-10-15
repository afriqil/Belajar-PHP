<?php
$host = "localhost"; // Host database
$username_db = "nama_pengguna_db"; // Username database
$password_db = "password_db"; // Password database
$database = "Login"; // Nama database

// Membuat koneksi ke database
$koneksi = new mysqli($host, $username_db, $password_db, $database);

// Periksa apakah koneksi berhasil
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
?>
