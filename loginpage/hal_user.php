<?php
//memulai session
session_start();
if (isset($_SESSION['level']))
{
//jika level user
if ($_SESSION['level']=="user")
{
//jika session username dan level ada masuk ke dashboard admin
echo "<b>SELAMAT DATANG DI HALAMAN USER</b><br>";
echo "User Anda : ".$_SESSION['username']."<br>";
echo "Level Anda : ".$_SESSION['level']."<br>";
echo "ISIKAN MENU USER DISINI<br>";
//link logout
echo "<a href='logout.php'>LOGOUT</a>";
}
//jika kondisi level bukan user maka akan diarahkan ke halaman lain
else
{
echo "LOGIN DULU SEBAGAI USER";
header('location:login.php');
}
}else{
echo "Session di halaman User telah habis";
}
?>