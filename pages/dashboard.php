<?php
// Sisipkan file konfigurasi
require_once('../includes/config.php');

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Tampilkan halaman listing produk
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <script
      src="https://kit.fontawesome.com/795be78259.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="/CSS/dashboard.css" />
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
              <a
                href="#"
                class="sidebar-link collapsed"
                data-bs-target="#pages"
                data-bs-toggle="collapse"
                aria-expanded="false"
              >
                <i class="fa-solid fa-file-lines pe-2"></i>Pages</a
              >
              <ul
                id="pages"
                class="sidebar-dropdown list-unstyled collapse"
                data-bs-parent="#sidebar"
              >
                <li class="sidebar-item">
                  <a href="/HTML-Dasar/pages/newproduct.html" class="sidebar-link">Product</a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Product 1</a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a
                href="#"
                class="sidebar-link collapsed"
                data-bs-target="#post"
                data-bs-toggle="collapse"
                aria-expanded="false"
              >
                <i class="fa-solid fa-sliders pe-2"></i>Product</a
              >
              <ul
                id="post"
                class="sidebar-dropdown list-unstyled collapse"
                data-bs-parent="#sidebar"
              >
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
          <a class="container-Product m-3 active " href="/pages/dashboard.php">Home</a>
          <a class="container-Product m-3" href="/pages/product.php">Product array</a>
          <a class="container-Product m-3" href="/pages/product_php.php">Product PHP</a>
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

        <main class="content px-3 py-2">
          <div class="container-fluid">
            <div class="mb-3">
              <h4>Admin Dashboard</h4>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill border-0 illustration">
                  <div class="card-body p-0 d-flex flex-fill">
                    <div class="row g-0 w-100">
                      <div class="col-6">
                        <div class="p-3 m-1">
                          <h4>Welcome back, <?php echo $_SESSION['username']; ?> </h4>
                          <p class="mb-0">Admin Dashboard</p>
                        </div>
                      </div>
                      <div class="col-6 align-self-end text-end">
                        <img src="/Assets/images/afriqil.png" alt="" class="img-fluid illustration-img">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill border-0">
                  <div class="card-body py-4 ">
                    <div class="d-flex align-items-start">
                      <div class="flex-grow-1">
                        <h4 class="mb-2">
                          Rp. 100.000
                        </h4>
                        <p class="mb-2">
                          Total Pendapatan
                        </p>
                        <div class="mb-0">
                          <span class="badge text-success me-2">
                            +10%
                          </span>
                          <span class="text-muted">
                            Pendapatan bulan ini
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Table Element -->
            <div class="card border-0">
              <div class="card-header">
                <h5 class="card-title">
                  Basic-table
                </h5>
                <h6 class="card-subtitle text-muted">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus perferendis animi,
                </h6>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
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
