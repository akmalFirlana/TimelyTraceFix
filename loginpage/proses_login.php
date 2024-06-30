<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$database = "db_timelytrace";
$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);
$sql = "SELECT * FROM `tb_user` WHERE `email`='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();


    if ($password == $row['password']) {

        $_SESSION['isLogged'] = true;
        $_SESSION['userid'] = $row['id_user'];
        $_SESSION['username'] = $row['username'];
        $name = $row['username'];
        $_SESSION['name'] = $name;
        echo "<script type='text/javascript'>
                alert('Welcome, $name!');
                window.location.href = 'landingpage.php';
              </script>";
    } else {
        echo "<script type='text/javascript'>
                alert('Invalid password.');
                window.location.href = 'loginpage.php';
              </script>";
    }
} else {
    echo "<script type='text/javascript'>
            alert('No user found with that email.');
            window.location.href = 'loginpage.php';
          </script>";
}

$conn->close();
?>
