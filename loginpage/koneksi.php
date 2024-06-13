<?php
//koneksi ke mysqli
$host="localhost";
$user="root";
$pass="";
$database="db_timelytrace";
$conn=mysqli_connect($host,$user,$pass,$database);

if(!$conn){
    echo "KONEKSI GAGAL!";
} else {
    echo "KONEKSI BERHASIL";
}
?>