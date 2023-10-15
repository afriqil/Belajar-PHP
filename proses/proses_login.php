<?php
// Simpan informasi login
$login_berhasil = false;
$username = "Afriqil"; // Ganti dengan username yang benar
$password = "wildan"; // Ganti dengan password yang benar

// Periksa apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    // Periksa apakah informasi login benar
    if ($input_username == $username && $input_password == $password) {
        $login_berhasil = true;
    }
}

if ($login_berhasil) {
    // Jika login berhasil, arahkan ke halaman dashboard
    header("Location: /pages/dashboard.html");
} else {
    // Jika login gagal, beri pesan kesalahan
    echo "Login gagal. Silakan coba lagi.";
}
?>
