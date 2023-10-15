    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

        <title>Login-layout</title>
        <link rel="stylesheet" href="/CSS/login.css" />
    </head>

    <body>

        <!-- <h2>Silakan Login</h2>
    <form method="POST" action="../proses/proses_login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password"  required><br><br>
        <input type="submit" value="Login">
    </form>
    <p>Belum memiliki akun? <a href="daftar.php">Daftar disini</a></p> -->

        <section class="login d-flex">
            <div class="login-left w-50 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-6">
                        <div class="header ">
                            <h1>Welcome!!!</h1>
                            <p>Please enter your detail</p>
                        </div>

                        <form method="POST" action="../proses/proses_login.php">
                            <div class="login-form">
                                <label for="username" class="form-label">username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Username" required/>

                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your password" required/>
                                <a href="#" class="text-decoration-none text-center">Forgot Password</a>
                                <input class="signin" type="submit" value="Sign In">

                                <button class="signin-google">
                                    <img src="/Assets/images/google.png" alt="" height="24px" width="24px" />Sign In With Google
                                </button>

                                <div class="text-center">
                                    <span class="d-inline">Tidak mempunyai akun?
                                        <a class="signup d-inline text-decoration-none" href="/pages/daftar.php">Silahkan daftar</a></span>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="login-right  w-50 h-100">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/Assets/images/Login.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/Assets/images/Login 2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/Assets/images/Login 3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </body>

    </html>



    </body>

    </html>