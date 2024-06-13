<?php
session_start();
include('koneksi.php');

$sql = "SELECT * FROM `tb_user` WHERE `email`='$_POST[email]' AND `password`='$_POST[password]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Retrieved password hash: " . $row['password'] . "<br>";
    echo "Password entered: " . $_POST['password'] . "<br>";
    if ($_POST['password'] == $row['password']) {
        echo "a";
        $_SESSION['userid'] = $row['id_user'];
        $_SESSION['username'] = $row['username'];
        header("Location: ../loginpage/landingpage2.html");
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No user found with that email.";
}
?>
