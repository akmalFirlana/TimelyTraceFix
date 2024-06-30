<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$database = "db_timelytrace";
$conn = mysqli_connect($host, $user, $pass, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the username from the session
$name = $_SESSION['username'];
$tableName = "tb_input_" . $name;

// Check if the table exists, and create it if it doesn't
$query = "CREATE TABLE IF NOT EXISTS $tableName (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    kelas VARCHAR(50) NOT NULL,
    absen INT(11) NOT NULL,
    tanggal DATETIME NOT NULL,
    alasan TEXT NOT NULL
)";

if (!mysqli_query($conn, $query)) {
    die("Error creating table: " . mysqli_error($conn));
}

// Memeriksa apakah tombol submit diklik
if(isset($_POST['submit'])) {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $absen = $_POST['absen'];
    $tanggal = $_POST['tanggal'];
    $alasan = $_POST['alasan'];

    // Menjalankan query untuk menyimpan data ke database
    $query = "INSERT INTO $tableName (nama, kelas, absen, tanggal, alasan) VALUES ('$nama', '$kelas', '$absen', '$tanggal', '$alasan')";

    if (mysqli_query($conn, $query)) {
        // Redirect ke halaman lain jika perlu
        header("Location: ../CRUD/Datapage.php");
        exit; // Pastikan untuk keluar dari skrip setelah redirect
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
