<?php
//memulai session
session_start();
if (isset($_SESSION['level']))
{
//jika level admin
if ($_SESSION['level']=="admin")
{
//jika session username dan level ada masuk ke dashboard admin
echo "<b>SELAMAT DATANG DI HALAMAN ADMIN</b><br>";
echo "User Anda : ".$_SESSION['username']."<br>";
echo "Level Anda : ".$_SESSION['level']."<br>";
echo "ISIKAN MENU ADMIN DISINI<br>";
//link logout
echo "<a href='logout.php'>LOGOUT</a>";
}
//jika kondisi level bukan admin maka akan diarahkan ke halaman lain
else
{
echo "LOGIN DULU SEBAGAI ADMIN";
header('location:login.php');
}
}else{
Echo "Session di halaman Admin telah habis";
}
?>