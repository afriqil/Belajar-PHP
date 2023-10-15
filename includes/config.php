<?php
// Mulai sesi
session_start();

// Koneksi ke database (jika diperlukan)
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "login";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
