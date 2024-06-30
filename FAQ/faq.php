<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
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
            <img src="img/logo.svg" alt="logo" style="width: 40px;">
            <a class="navbar-brand me-auto ms-2" href="#">TimelyTrace</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">TimelyTrace</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item p-1">
                            <a class="nav-link" href="../loginpage/landingpage.php">Home</a>
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

    <div class="container-fluid row justify-content-around m-top">
        <div class="col-md-5 col-sm-12 header">
            <h1 style="padding-left: 10px; font-weight: 700;">F.A.Q</h1>
            <p style="font-size: 20px; font-weight: 500;">Selamat datang di Halaman FAQ kami! Temukan jawaban cepat
                untuk pertanyaan umum di sini. Untuk pertanyaan
                lainnya, hubungi tim <a href="mailto:akmaleka457@gmail.com"
                    style="color: red; text-decoration: none">Dukungan kami.</a></p>
            <img src="img/faq.png" alt="FAQ" class="img-fluid" style="height: 400px; display: block; margin: 0 auto;">
        </div>
        <div class="col-md-5 col-sm-12">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item pt-2" style="border: none;">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button title" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne" style="background-color: #d9d9d9;">
                            Apa itu TimelyTrace?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body" style="border: 1px solid #d9d9d9;">
                            TimelyTrace adalah sebuah platform digital yang dirancang khusus untuk mempermudah guru
                            dalam mencatat dan mengelola data keterlambatan siswa. Dengan menggunakan TimelyTrace, guru
                            dapat mencatat waktu dan alasan keterlambatan dengan cepat dan akurat, serta memantau tren
                            keterlambatan siswa secara keseluruhan. Ini membantu dalam mengambil tindakan preventif dan
                            korektif untuk meningkatkan disiplin dan kehadiran siswa di kelas.
                        </div>
                    </div>
                </div>
                <div class="accordion-item pt-4" style="border: none;">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed title" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo" style="background-color: #d9d9d9;">
                            Bagaimana cara mendaftar di TimelyTrace?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body" style="border: 1px solid #d9d9d9;">
                            Anda dapat mendaftar dengan mengklik tombol "Daftar" di halaman utama dan mengisi formulir
                            pendaftaran yang tersedia.
                        </div>
                    </div>
                </div>
                <div class="accordion-item pt-4" style="border: none;">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed title" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree" style="background-color: #d9d9d9;">
                            Bagaimana cara mencatat keterlambatan siswa?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body" style="border: 1px solid #d9d9d9;">
                            Untuk mencatat keterlambatan siswa, pertama-tama login ke akun TimelyTrace Anda. Setelah
                            itu, pilih kelas atau nama siswa yang bersangkutan dari dashboard Anda. Klik pada opsi
                            "Catat Keterlambatan" dan isi detail yang diperlukan seperti waktu keterlambatan dan alasan.
                            Setelah semua informasi dimasukkan, klik "Simpan" untuk menyimpan data keterlambatan
                            tersebut ke dalam sistem.
                        </div>
                    </div>
                </div>

                <div class="accordion-item pt-4" style="border: none;">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button collapsed title" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFour" style="background-color: #d9d9d9;">
                            Bisakah saya mengedit atau menghapus data keterlambatan yang telah dicatat?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body" style="border: 1px solid #d9d9d9;">
                            Tentu saja, Anda memiliki fleksibilitas untuk mengedit atau menghapus data keterlambatan
                            yang telah dicatat di TimelyTrace. Masuk ke dashboard Anda, pilih entri keterlambatan yang
                            ingin Anda ubah atau hapus, dan klik opsi yang sesuai. Anda dapat memperbarui informasi yang
                            salah atau menghapus entri yang tidak diperlukan dengan mudah.
                        </div>
                    </div>
                </div>

                <div class="accordion-item pt-4" style="border: none;">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                        <button class="accordion-button collapsed title" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFive" style="background-color: #d9d9d9;">
                            Bagaimana cara memberikan umpan balik atau saran?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFive">
                        <div class="accordion-body" style="border: 1px solid #d9d9d9;">
                            Kami sangat menghargai umpan balik dan saran dari pengguna untuk terus meningkatkan
                            TimelyTrace. Anda dapat mengirimkan umpan balik atau saran melalui formulir umpan balik di
                            halaman "Kontak" di website kami, atau langsung mengirim email ke <a href="#" style="color: blue; text-decoration: none;">feedback@timelytrace.com.</a>
                            Kami selalu terbuka untuk mendengarkan masukan Anda dan berusaha untuk membuat platform kami
                            lebih baik.
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>