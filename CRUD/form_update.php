<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        ::after,
        ::before {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #EEEEEE;
        }

        i {
            height: 30px !important;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        h1 {
            font-weight: 600;
            font-size: 1.5rem;
        }

        .icon-bold {
            font-weight: bold;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .wrapper {
            display: flex;
        }

        .main {
            min-height: 100vh;
            width: 100%;
            overflow: hidden;
            transition: all 0.35s ease-in-out;
            background-color: #fafbfe;
        }

        #sidebar {
            width: 70px;
            min-width: 70px;
            z-index: 1000;
            transition: all .25s ease-in-out;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            border: none;
            border-radius: 20px;
            margin: 10px 0 10px 10px;
        }

        #sidebar.expand {
            width: 260px;
            min-width: 260px;
        }

        .toggle-btn {
            background-color: transparent;
            cursor: pointer;
            border: 0;
            padding: 1rem 1rem;
        }

        .toggle-btn i {
            font-size: 1.5rem;
            color: #AAD7D9;
        }

        .sidebar-logo {
            margin: auto 0;
        }

        .sidebar-logo a {
            color: #AAD7D9;
            font-size: 1.15rem;
            font-weight: 600;
        }

        #sidebar:not(.expand) .sidebar-logo,
        #sidebar:not(.expand) a.sidebar-link span {
            display: none;
        }

        .sidebar-nav {
            padding: 2rem 0;
            flex: 1 1 auto;
        }

        a.sidebar-link {
            padding: .625rem 1.625rem;
            color: #3847c8;
            display: block;
            font-size: 0.9rem;
            white-space: nowrap;
            border-left: 3px solid transparent;
        }

        .sidebar-link i {
            font-size: 1.1rem;
            margin-right: .75rem;
        }

        a.sidebar-link:hover {
            background-color: rgba(0, 0, 0, 0.05);
            border-left: 3px solid #3b7ddd;
        }

        .sidebar-item {
            position: relative;
        }

        #sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
            position: absolute;
            top: 0;
            left: 70px;
            background-color: #3B84A3;
            padding: 0;
            min-width: 15rem;
            display: none;
        }

        #sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown {
            display: block;
            max-height: 15em;
            width: 100%;
            opacity: 1;
        }

        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after {
            border: solid;
            border-width: 0 .075rem .075rem 0;
            content: "";
            display: inline-block;
            padding: 2px;
            position: absolute;
            right: 1.5rem;
            top: 1.4rem;
            transform: rotate(-135deg);
            transition: all .2s ease-out;
        }

        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
            transform: rotate(45deg);
            transition: all .2s ease-out;
        }

        .container {
            width: 90%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-left: 24px;
            display: inline-block;
        }

        .form-group {
            width: 100%;
            margin: 10px 0;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="expand">
            <div class="d-flex align-items-center justify-content-start mt-3"
                style="height: 50px; justify-content: center;">
                <button class="toggle-btn" type="button">
                    <img src="img/logo.svg" alt="logo" style="width: 40px;">
                </button>
                <div class="sidebar-logo">
                    <a href="../loginpage/landingpage.php">TimelyTrace</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="../input/input.php" class="sidebar-link">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span style="font-weight: 600;">Input</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../CRUD/Datapage.php" class="sidebar-link">
                        <i class="fa-solid fa-clipboard-list"></i>
                        <span style="font-weight: 600;">Catatan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../input/inputkelas.php" class="sidebar-link">
                        <i class="bi bi-people-fill"></i>
                        <span style="font-weight: 600;">Kelas</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../faq/faq.html" class="sidebar-link">
                        <i class="bi bi-question-circle-fill"></i>
                        <span style="font-weight: 600;">Faq</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-headset"></i>
                    <span style="font-weight: 600;">Bantuan?</span>
                </a>
            </div>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span style="font-weight: 600;">Logout</span>
                </a>
            </div>

        </aside>

        <div class="main" style="background-color: #EEEEEE">
            <h4 class="ms-4 mt-3 mb-4">Update Data Siswa Terlambat</h4>
            <div class="container">
                <div class="upper-line"
                    style="width: 100%; height: 10px; background-color:#AAD7D9; border-radius: 10px 10px 0 0;"></div>

                <?php
                include "koneksi.php";

                if (isset($_GET['nisn'])) {
                    $nisn = $_GET['nisn'];
                    $query = "SELECT * FROM `tb_input` WHERE nisn='$nisn'";
                    $hasil = mysqli_query($conn, $query);
                    $data = mysqli_fetch_array($hasil);
                }
                ?>

                <form action="proses_update.php" method="post">
                    <div class="form-group row">
                        <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $data['nisn']; ?>" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label">Nama Siswa</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
                        <div class="col-sm-8">
                        <select class="form-control" id="kelas" name="kelas">
                        <?php include '../input/get_classes.php'; ?></select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="absen" class="col-sm-4 col-form-label">No Absen</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="absen" name="absen" value="<?php echo $data['absen']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Terlambat</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $data['tanggal']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alasan" class="col-sm-4 col-form-label">Alasan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="alasan" name="alasan" value="<?php echo $data['alasan']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-4">
                            <button type="submit" class="btn btn-primary" name="submit">KIRIM</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        const hamBurger = document.querySelector(".toggle-btn");

        hamBurger.addEventListener("click", function () {
            document.querySelector("#sidebar").classList.toggle("expand");
        });
    </script>

</body>

</html>

