<?php
include "koneksi.php";

$username = isset($_POST['username']) ? $_POST['username'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$level = "user";
$kirim = isset($_POST['kirim_register']) ? $_POST['kirim_register'] : null;

if ($kirim && $username && $email && $password) {
    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM `tb_user` WHERE `email`='$email'";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($checkEmailResult) > 0) {
        echo "<script type='text/javascript'>
                alert('Email sudah terdaftar');
                window.location.href = 'loginpage.php';
              </script>";
    } else {
        $query = "INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`, `level`) VALUES (NULL, '$username', '$email', '$password', '$level')";
        $hasil = mysqli_query($conn, $query);

        if ($hasil) {
            echo "<script type='text/javascript'>
                alert('Registrasi User Berhasil, silahkan login');
                window.location.href = 'loginpage.php';
              </script>";
        } else {
            echo "Registrasi User Gagal!<br>";
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    echo "Registrasi User Gagal!<br>";
    echo "Silakan isi semua data.";
}
?>
