<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<header>
    <div class="nav-bar">
      <a href="/HTML-Dasar/index.html" class="Logo">
        <img src="/Assets/images/Logo.png" alt="">
      </a>
    <div class="navigation">
      <div class="nav-items">
      <a href="/pages/daftar.php">Daftar</a>
      <a href="/pages/login.php">Login</a>
      </div>
    </div>
    <i class="uil uil-apps nav-menu-btn"></i>
    </div>
  </header>

<body>
    <section>
        <div class="slides">
            <div class="slide">
                <img src="/Assets/Images/bisnis 1.jpg" alt="burger">
            </div>
            <div class="slide">
                <img src="/Assets/Images/bisnis 2.jpg" alt="Pizza">
            </div>
            <div class="slide">
                <img src="/Assets/Images/bisnis 3.jpg" alt="big burger">
            </div>
            <div class="btn-nav">
                <a class="prev" onclick="plusSlide(-1)">&#10094</a>
                <a class="next" onclick="plusSlide(-1)">&#10095</a>
            </div>
        </div>
    </section>

    <section class="container-content">
        <div class="content">
            <h1 class="judul">Selamat Datang</h1>
            <p class="deskripsi">Di Website Kami Anda Bisa Mendapatkan Informasi Tentang Bisnis dan penghasilan </p>
        </div>

        <div class="button">
            <a href="/pages/daftar.php" class="btn-daftar">Daftar Sekarang!</a>
            <a href="/pages/login.php" class="btn-login">Login</a>
        </div>
    </section>

    <script src="/JS/script.js"></script>
    <script src="/JS/carosel.js"></script>

</body>

</html>