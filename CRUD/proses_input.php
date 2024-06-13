<?php
// Memanggil file koneksi.php
include "koneksi.php";

// Mengambil data dari form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$absen = $_POST['absen'];
$tanggal = $_POST['tanggal'];
$alasan = $_POST['alasan'];

// Mengecek apakah tombol submit diklik
if (isset($_POST['kirim_input'])) {
    // Menghindari injeksi SQL
    $nama = $conn->real_escape_string($nama);
    $kelas = $conn->real_escape_string($kelas);
    $absen = (int) $absen;
    $tanggal = $conn->real_escape_string($tanggal);
    $alasan = $conn->real_escape_string($alasan);

    // Query untuk memasukkan data
    $query = "INSERT INTO `tb_input`(`nama`, `kelas`, `absen`, `tanggal`, `alasan`) VALUES ('$nama','$kelas','$absen','$tanggal','$alasan')";

    // Menjalankan query dan memeriksa hasilnya
    if ($conn->query($query) === TRUE) {
        echo "Data berhasil masuk database<br>";
        echo $nama. "<br>";
        echo $kelas. "<br>";
        echo $absen. "<br>";
        echo $tanggal. "<br>";
        echo $alasan. "<br>";
        echo "<a href='../Datapage/Datapage.php'>ke Datapage</a>";
    } else {
        echo "Data gagal masuk: " . $conn->error;
    }
} else {
    echo "Data gagal masuk!";
}

// Menutup koneksi
$conn->close();
?>
