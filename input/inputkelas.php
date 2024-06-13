<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_Timelytrace";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS kelas (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_kelas VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error;
}

// Handle form submission for adding class
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add"])) {
    $nama_kelas = $_POST["kelas"];

    if (!empty($nama_kelas)) {
        $stmt = $conn->prepare("INSERT INTO kelas (nama_kelas) VALUES (?)");
        $stmt->bind_param("s", $nama_kelas);

        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Kelas berhasil ditambahkan!</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }

        $stmt->close();
    } else {
        echo "<div class='alert alert-warning'>Nama kelas tidak boleh kosong!</div>";
    }
}

// Handle form submission for updating class
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $id = $_POST["id"];
    $nama_kelas = $_POST["kelas"];

    if (!empty($nama_kelas)) {
        $stmt = $conn->prepare("UPDATE kelas SET nama_kelas = ? WHERE id = ?");
        $stmt->bind_param("si", $nama_kelas, $id);

        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Kelas berhasil diperbarui!</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }

        $stmt->close();
    } else {
        echo "<div class='alert alert-warning'>Nama kelas tidak boleh kosong!</div>";
    }
}

// Handle form submission for deleting class
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $id = $_POST["id"];

    $stmt = $conn->prepare("DELETE FROM kelas WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Kelas berhasil dihapus!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }

    $stmt->close();
}

// Fetch classes from the database
$result = $conn->query("SELECT * FROM kelas");

$conn->close();
?>

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
    <link rel="stylesheet" href="kelas.css">
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
            <h4 class="ms-4 mt-3 mb-4 fw-bold">Daftar Kelas</h4>

            <div class="container-upper pb-3">
                <h5 class="ms-4 mt-3 fw-bold">Buat Kelas Baru</h5>
                <form action="#" method="post" class="sidebar-form ms-4 pb-1">
                    <div class="input-group">
                        <input type="text" class="input" id="kelas" name="kelas" placeholder="Nama Kelas"
                            autocomplete="off">
                        <input class="button--submit" value="Tambah" type="submit" name="add">
                    </div>
                </form>
            </div>

            <div class="container">
                <h5 class="ms-4 mt-3 fw-bold">Daftar Kelas</h5>
                <?php if ($result->num_rows > 0): ?>
                    <div class="class-list ms-3 me-3 mt-3 pb-3">
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <button class="btn btn-sm me-2 no-effect-button" data-bs-toggle="modal"
                                data-bs-target="#editModal<?php echo $row['id']; ?>">
                                <div class="class-item row align-items-center">
                                    <span class="col-md-12"><?php echo htmlspecialchars($row["nama_kelas"]); ?></span>
                                </div>
                            </button>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1"
                                aria-labelledby="editModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel<?php echo $row['id']; ?>">Edit Kelas
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="#" method="post">
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                <div class="mb-3">
                                                    <label for="kelas" class="form-label">Nama Kelas</label>
                                                    <input type="text" class="form-control" id="kelas" name="kelas"
                                                        value="<?php echo htmlspecialchars($row['nama_kelas']); ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="#" method="post" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                    <button class="btn btn-danger" type="submit" name="delete">Hapus</button>
                                                </form>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="update">Simpan
                                                    Perubahan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <p class="text-center">Belum ada kelas yang ditambahkan.</p>
                <?php endif; ?>
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