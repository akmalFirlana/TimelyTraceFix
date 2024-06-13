<?php
//memulai session
session_start();
//menghapus variabel session username
unset($_SESSION['username']);
//menghapus session dari browser
session_destroy();
echo "ANDA SUDAH LOGOUT<br>";
echo "<a href='login.php'>LOGIN</a>";
?>