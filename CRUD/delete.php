<?php
include "koneksi.php";

// Cek apakah parameter 'nisn' ada dalam URL
if (isset($_GET['nisn'])) {
    $nisn = $_GET['nisn'];
    
    // Lakukan query DELETE
    $query = "DELETE FROM `tb_input` WHERE nisn='$nisn'";
    $hasil = mysqli_query($conn, $query);

    if ($hasil) {
        // Jika query berhasil, arahkan kembali ke halaman Datapage.php
        echo "<script language='javascript'>
                alert('Data berhasil dihapus');
                document.location.href = 'Datapage.php';
              </script>";
    } else {
        // Jika query gagal, tampilkan pesan kesalahan
        echo "Gagal hapus data: " . mysqli_error($conn);
    }
} else {
    // Jika parameter 'nisn' tidak ada, tampilkan pesan kesalahan
    echo "Parameter 'nisn' tidak ditemukan.";
}
?>
