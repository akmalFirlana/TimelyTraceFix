<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="landing.css">
</head>

<body>
<?php
    session_start();

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "db_timelytrace";
    $conn = mysqli_connect($host, $user, $pass, $database);

    $logged = isset($_SESSION['isLogged']) && $_SESSION['isLogged'] === true;
    ?>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <img src="imglan/logo.svg" alt="logo" style="width: 40px;">
            <a class="navbar-brand me-auto ms-2" href="#">TimelyTrace</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">TimelyTrace</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item p-1">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item p-1">
                            <a class="nav-link" href="../FAQ/faq.php">Faq</a>
                        </li>
                        <li class="nav-item p-1">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Fitur
                                </a>
                                <ul class="dropdown-menu">
                                    <?php if ($logged): ?>
                                        <li><a class="dropdown-item" href="../CRUD/dashboard.php">dashboard</a></li>
                                        <li><a class="dropdown-item" href="../input/input.php">Input</a></li>
                                        <li><a class="dropdown-item" href="../CRUD/Datapage.php">Catatan</a></li>
                                        <li><a class="dropdown-item" href="../input/inputkelas.php">Kelas</a></li>
                                    <?php else: ?>
                                        <li><a class="dropdown-item disabled" href="#">dashboard</a></li>
                                        <li><a class="dropdown-item disabled" href="#">Input</a></li>
                                        <li><a class="dropdown-item disabled" href="#">Catatan</a></li>
                                        <li><a class="dropdown-item disabled" href="#">Kelas</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <?php if ($logged): ?>
                <a href="../loginpage/logout.php" class="login-button">Logout</a>
            <?php else: ?>
                <a href="../loginpage/loginpage.php" class="login-button">Login</a>
            <?php endif; ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <header class="section__container row justify-content-around align-items-center pb-5 pt-5" id="home">
        <div class="header__content z-1 col-md-6 order-sm-2 order-md-1">
            <h1 class="hero hero-hed z-1">Taklukkan keterlambatan siswa <span>dengan TimelyTrace. Mudah dan
                    efisien!</span></h1>
            <p class="section__description hero-hed col-md-10 pt-3 desc z-1 w-100">
                Mari kita memulai perjalananmu menuju gaya hidup sehat yang
                berkelanjutan dan penuh makna.Jadilah bagian dari komunitas yang peduli akan
                kesehatan dan bersama-sama kita akan mencapai tujuan kesehatan yang lebih baik!
            </p>
            <div class="header__btn pt-2 d-flex">
                <button class="btn mt-auto">Cari tahu</button>
            </div>
        </div>
        <div class="header__image col-md-5 z-1 order-sm-1 order-md-2">
            <img src="imglan/landing.svg" alt="header" />
        </div>
        <img src="imglan/upshapes.svg" alt="header"
            class="header__shape z-0 position-absolute top-0 start-0 p-0 d-lg-block d-none" />
    </header>


    <section class="section__container d-flex justify-content-center align-items-center pt-5 mt-5">
        <div class="upper-text text-center col-md-5">
            <p class="mb-0">services</p>
            <h2 class="font1">buat proses pemantauan kehadiran siswa yang terlambat menjadi lebih efisien dan efektif.
            </h2>
        </div>
    </section>

    <div class="section__container row justify-content-around align-items-center pb-5" id="home">
        <div class="header__image col-md-5">
            <img src="imglan/hero2.svg" alt="header" />
        </div>
        <div class="header__content col-md-6">
            <h3 class="font2 pt-2">Keunggulan TimelyTrace</span></h3>
            <h2 class="font1">Untuk Kemudahan.</h2>
            <div class="section__better col-md-10 pt-2 font1 row">
                <div class="d-flex align-items-center col-md-12">
                    <div class="icon-container col-md-1 top-0">
                        <i class="bi bi-check-circle-fill top-0"></i>
                    </div>
                    <div class="text-container col-md-11 pt-3">
                        <p>Pencatatan yang lebih cepat dan terarah.</p>
                    </div>
                </div>
                <div class="d-flex align-items-center col-md-12">
                    <div class="icon-container col-md-1 top-0">
                        <i class="bi bi-check-circle-fill top-0"></i>
                    </div>
                    <div class="text-container col-md-11 pt-3">
                        <p>Penggunaan yang mudah dan ringkas.</p>
                    </div>
                </div>
                <div class="d-flex align-items-center col-md-12">
                    <div class="icon-container col-md-1 top-0">
                        <i class="bi bi-check-circle-fill top-0"></i>
                    </div>
                    <div class="text-container col-md-11 pt-3">
                        <p>Fitur Pengelolaan Data yang Fleksibel.</p>
                    </div>
                </div>
            </div>

            <div class="header__btn pt-4 d-flex">
                <button class="btn mt-auto">Cari tahu</button>
            </div>
        </div>
    </div>

    <section class="section__container d-flex justify-content-center align-items-center py-5">
        <div class="upper-text text-center col-md-5">
            <p class="mb-0">services</p>
            <h2 class="font1">Temukan Fitur-Fitur Canggih dalam TimelyTrace:
            </h2>
        </div>
    </section>

    <div class="row justify-content-evenly pdmax" style="margin: 0px 80px 80px 80px;">
        <div class="card col-lg-3 col-md-6 text-center d-sm-block "
            style="max-width: 300px;min-width: 200px; margin-bottom: 40px;">
            <img src="imglan/catatan.svg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Catatan</h5>
                <p class="card-text col-md-10 offset-md-1">Fitur ini memungkinkan penjaga sekolah atau staf administrasi
                    untuk dengan mudah mencatat kehadiran siswa yang terlambat.</p>
                <a href="#" class="mt-auto"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                        fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                    </svg></a>
            </div>
        </div>

        <div class="card col-lg-3 col-md-6 text-center d-sm-block"
            style="max-width: 300px;min-width: 200px; margin-bottom: 40px;">
            <img src="imglan/data.svg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Riwayat</h5>
                <p class="card-text col-md-10 offset-md-1">Menyediakan akses ke data histori keterlambatan siswa secara
                    lengkap dan terperinci. Pengguna dapat melihat catatan keterlambatan siswa dari waktu ke waktu.</p>
                <a href="#" class="mt-auto"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                        fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                    </svg></a>
            </div>
        </div>

        <div class="card col-lg-3 col-md-6 text-center d-sm-block "
            style="max-width: 300px;min-width: 200px; margin-bottom: 40px;">
            <img src="imglan/pengelola.svg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Kelola Data</h5>
                <p class="card-text col-md-10 offset-md-1">Fitur pengelolaan data TimelyTrace memungkinkan pengguna
                    untuk
                    mengelola dan mengatur informasi kehadiran siswa dengan mudah.</p>
                <a href="#" class="mt-auto"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                        fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                    </svg></a>
            </div>
        </div>
    </div>

    <div class="row align-items-center justify-content-center pbm">
        <div class="bottom-container d-flex align-items-center justify-content-evenly col-md-9"
            style="height: auto; width: 90%; max-width: 1100px;">
            <img class="col-md-5 d-md-block d-none" src="imglan/school-19.svg" style="width: 50%; max-width: 400px;"
                alt="header" />
            <div class="sidetext col-md-5">
                <h3 class="font1 py-4">Solusi terpercaya untuk memantau kehadiran siswa</h3>
                <p>Segera bergabung dengan kami dan nikmati kemudahan dalam mencatat, melihat histori, dan mengelola
                    data kehadiran siswa. Mari bersama-sama menciptakan lingkungan belajar yang lebih teratur dan
                    efisien.
                </p>
                <button class="btn mt-3 mb-4">Bergabung!</button>
            </div>
        </div>
    </div>



    <footer class="text-center text-lg-start text-white" style="background-color: #929fba">
        <div class="container p-4 pb-0">
            <section class="">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            TimelyTrace
                        </h6>
                        <p class="col-md-10">
                            Mencatat kehadiran siswa yang terlambat menjadi lebih mudah dengan TimelyTrace.
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Tentang kami</h6>
                        <p class="m-2">
                            <a class="text-white">Sumber</a>
                        </p>
                        <p class="m-2">
                            <a class="text-white">Email</a>
                        </p>
                        <p class="m-2">
                            <a class="text-white">Dukungan</a>
                        </p>
                        <p class="m-2">
                            <a class="text-white">Kontak</a>
                        </p>
                    </div>

                    <hr class="w-100 clearfix d-md-none" />

                    <hr class="w-100 clearfix d-md-none" />

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Fitur Kami</h6>
                        <p class="m-2"> Catatan</p>
                        <p class="m-2"> Riwayat</p>
                        <p class="m-2"> Kelola data</p>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold align-items-center">Follow us</h6>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!"
                            role="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!"
                            role="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                            </svg></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!"
                            role="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #dc3838" href="#!"
                            role="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                            </svg> </a>
                    </div>
                </div>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-white"> TimelyTrace</a>
        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>