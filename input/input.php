<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Input</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_timelytrace";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_SESSION['username'];
    $kelasname = "kelas_" . $name;

    $sql = "SELECT nama_kelas FROM $kelasname";
    $result = $conn->query($sql);

    ?>
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
                    <a href="../CRUD/dashboard.php" class="sidebar-link">
                        <i class="fa-solid fa-house"></i>
                        <span style="font-weight: 600;">Beranda</span>
                    </a>
                </li>
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
                        <i class="fa-solid fa-users"></i>
                        <span style="font-weight: 600;">Kelas</span>
                    </a>
                </li>   
                <li class="sidebar-item">
                    <a href="../FAQ/faq.php" class="sidebar-link">
                        <i class="fa-solid fa-headset"></i>
                        <span style="font-weight: 600;">FaQ</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../loginpage/logout.php" class="sidebar-link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span style="font-weight: 600;">Logout</span>
                    </a>
                </li>
            </ul>
        </aside>

        <div class="main" style="background-color: #EEEEEE">
            <h4 class="ms-4 mt-3 mb-4">Input Daftar Siswa Terlambat</h4>
            <div class="container">
                <div class="upper-line"
                    style="width: 100%; height: 10px; background-color:#AAD7D9; border-radius: 10px 10px 0 0;"></div>
                <form action="proses_input.php" method="post" class="sidebar-form" onsubmit="return validateForm()">
                    <p class="m-3" style="font-weight: 600; color: #635151">Input Daftar Siswa Terlambat</p>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label">Nama Siswa</label>
                        <div class="col-sm-8">
                            <input type="text" autocomplete="off" class="form-control" id="nama" name="nama"
                                placeholder="" required pattern="[A-Za-z\s]+">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="kelas" name="kelas">
                                <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . htmlspecialchars($row["nama_kelas"]) . '">' . htmlspecialchars($row["nama_kelas"]) . '</option>';
                                    }
                                } else {
                                    echo '<option value="">No classes available</option>';
                                }
                                $conn->close();
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="absen" class="col-sm-4 col-form-label">No Absen</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="absen" name="absen" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-4 col-form-label">Tanggal keterlambatan</label>
                        <div class="col-sm-8">
                            <input type="datetime-local" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alasan" class="col-sm-4 col-form-label">Alasan</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="alasan" name="alasan" autocomplete="off"
                                required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-10">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script>
            function validateForm() {
                var nama = document.getElementById("nama").value;
                var absen = document.getElementById("absen").value;

                var namaPattern = /^[A-Za-z\s]+$/;
                if (!namaPattern.test(nama)) {
                    alert("Nama siswa hanya boleh mengandung huruf dan spasi.");
                    return false;
                }

                var absenPattern = /^\d+$/;
                if (!absenPattern.test(absen)) {
                    alert("No Absen hanya boleh mengandung angka.");
                    return false;
                }

                return true;
            }
        </script>
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