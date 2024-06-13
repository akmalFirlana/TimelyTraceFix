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
    <div class="wrapper">
        <aside id="sidebar" class="expand">
            <div class="d-flex align-items-center justify-content-start mt-3"
                style="height: 50px; justify-content: center;">
                <button class="toggle-btn" type="button">
                    <img src="img/logo.svg" alt="logo" style="width: 50px;">
                    <img src="img/logo.svg" alt="logo" style="width: 40px;">
                </button>
                <div class="sidebar-logo">
                    <a href="../loginpage/landingpage.html">TimelyTrace</a>
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
                    <a href="#" class="sidebar-link">
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

            <h4 class="ms-4 mt-3 mb-4">Data Siswa Terlambat</h4>
            <div class="container">
                <div class="upper-line"
                    style="width: 100%; height: 10px; background-color:#AAD7D9; border-radius: 10px 10px 0 0;"></div>
                <table class="table table-bordered m-2 " style="width: 98%;">
                    <tr class="text-center">
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>No Absen</th>
                        <th>Tanggal Terlambat</th>
                        <th>Alasan</th>
                        <th colspan="2">Action</th>
                    </tr>

                    <?php
                    // Memasukkan file koneksi database
                    include "koneksi.php";
                    // Menjalankan query untuk mengambil data dari tabel tb_input
                    $query = "SELECT * FROM tb_input ORDER BY kelas";
                    $hasil = mysqli_query($conn, $query);

                    if (!$hasil) {
                        die("Query gagal: " . mysqli_error($conn));
                    }

                    // Memeriksa apakah ada hasil dari query
                    if (mysqli_num_rows($hasil) > 0) {

                        // Mengambil data per baris dan menampilkannya dalam tabel
                        while ($data = mysqli_fetch_assoc($hasil)) {
                            ?>
                            <tr>
                                <td><?php echo $data['nisn']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['kelas']; ?></td>
                                <td><?php echo $data['absen']; ?></td>
                                <td><?php echo $data['tanggal']; ?></td>
                                <td><?php echo $data['alasan']; ?></td>
                                <td class="text-end" style="border-right: none; width: 92px"><a
                                        href="form_update.php?nisn=<?php echo $data['nisn']; ?>" class="btn btn-warning">Edit<i
                                            class="bi bi-pencil-square"></i></a></td>
                                <td style="border-left: none"><a href="delete.php?nisn=<?php echo $data['nisn']; ?>"
                                        class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">
                                        Hapus<i class="bi bi-trash-fill"></i>
                                    </a></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "Tidak ada data.";
                    }
                    ?>
                </table>
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
