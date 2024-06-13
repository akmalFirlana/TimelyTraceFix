<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $absen = $_POST['absen'];
    $tanggal = $_POST['tanggal'];
    $alasan = $_POST['alasan'];
    $query = "UPDATE tb_input SET nama='$nama',kelas='$kelas',absen='$absen',tanggal='$tanggal',alasan='$alasan' WHERE nisn='$nisn'";
    $query = "UPDATE `tb_input` SET `nama`='$nama',`kelas`='$kelas',`absen`='$absen',`tanggal`='$tanggal',`alasan`='$alasan' WHERE nisn='$nisn'";
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil diperbarui";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: Datapage.php");
exit();
    exit();
}
?>
