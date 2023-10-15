<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product PHP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <script src="https://kit.fontawesome.com/795be78259.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/CSS/dashboard.css" />
  <link rel="stylesheet" href="/CSS/product.css">
</head>

<body>
  <div class="wrapper">
    <aside id="sidebar">
      <!-- Content For Sidebar -->
      <div class="h-100">
        <div class="sidebar-logo">
          <a href="#">Afriqil</a>
        </div>

        <ul class="sidebar-nav">
          <li class="sidebar-header">Admin Elements</li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="fa-solid fa-list"></i>
              Dashboard
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" aria-expanded="false">
              <i class="fa-solid fa-file-lines pe-2"></i>Pages</a>
            <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="/HTML-Dasar/pages/newproduct.html" class="sidebar-link">Product</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Product 1</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed" data-bs-target="#post" data-bs-toggle="collapse" aria-expanded="false">
              <i class="fa-solid fa-sliders pe-2"></i>Product</a>
            <ul id="post" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="/pages/product.php" class="sidebar-link">Product</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Product 1</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Product 2</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </aside>

    <div class="main">
      <nav class="navbar navbar-expand px-3 border-bottom">
        <button class="btn" id="sidebar-toggle" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-items">
          <a class="container-Product m-3" href="/pages/dashboard.php">Home</a>
          <a class="container-Product m-3" href="/pages/product.php">Product array</a>
          <a class="container-Product m-3 active" href="/pages/product_php.php">Product PHP</a>
        </div>

        <div class="navbar-collapse navbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                <img src="/Assets/images/afriqil.png" class="avatar img-fluid rounded" alt="">
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Setting</a>
                <a href="../proses/logout.php" class="dropdown-item">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <main class="content px-3 py-2 ">
        <div class="container-fluid">
          <div class="mb-3 text-center">
            <h4>Product PHP</h4>
          </div>
        </div>

        <div class="card-deck d-flex flex-wrap">
      <?php
      // Buat variabel PHP dengan daftar produk
      $produk = array(
        array("Big Burger", "Enak dan Lezat", "Rp. 100.000", "/Assets/Images/big burger.webp"),
        array("Pizza", "Variasi rasa yang luar biasa", "Rp. 120.000", "/Assets/Images/pizza.webp"),
        array("Pizza", "Variasi rasa yang luar biasa", "Rp. 120.000", "/Assets/Images/pizza.webp"),
        array("Pizza", "Variasi rasa yang luar biasa", "Rp. 120.000", "/Assets/Images/pizza.webp"),
        array("Pizza", "Variasi rasa yang luar biasa", "Rp. 120.000", "/Assets/Images/pizza.webp"),
        array("Pizza", "Variasi rasa yang luar biasa", "Rp. 120.000", "/Assets/Images/pizza.webp"),
        // Tambahkan produk lainnya ke dalam array ini sesuai dengan kebutuhan Anda
      );

      // Loop melalui daftar produk dan tampilkan dalam kartu
      foreach ($produk as $item) {
        echo '
        <div class="card mx-auto mr-2" style="width: 18rem;">
          <img src="' . $item[3] . '" class="card-img-top" alt="' . $item[0] . '">
          <div class="card-body text-center">
            <h5 class="card-title">' . $item[0] . '</h5>
            <p class="card-text">' . $item[1] . '</p>
            <a href="#" class="btn btn-primary">' . $item[2] . '</a>
          </div>
        </div>';
      }
      ?>
    </div>


      </main>

      <!-- Tema -->
      <a href="#" class="theme-toggle">
        <i class="fa-regular fa-moon"></i>
        <i class="fa-regular fa-sun"></i>
      </a>

      <!-- FOOTER -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-start">
              <p class="mb-0">
                <a href="#" class="text-muted">
                  <b>Afriqil Wildan</b>
                </a>
              </p>
            </div>
            <div class="col-6 text-end">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#" class="text-muted">
                    Contact
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-muted">
                    About Us
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-muted">
                    Terms
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-muted">
                    Booking
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/JS/dashboard.js"></script>
</body>

</html>