<!DOCTYPE html>
<html>
<head>
    <title>Halaman Daftar</title>
</head>
<body>
    <h2>Pendaftaran</h2>
    <form method="POST" action="../proses/proses_daftar.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Daftar">
    </form>
    <p>Sudah memiliki akun? <a href="login.php">Login disini</a></p>
</body>
</html>
