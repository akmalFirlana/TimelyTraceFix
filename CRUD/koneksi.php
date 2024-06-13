<?php
//KONEKSI KE MYSQLi
$host="localhost";
$user="root";
$pass="";
$database="db_timelytrace";
$conn=mysqli_connect($host,$user,$pass,$database);
$db_conn=mysqli_select_db($conn,$database);
if(!$conn){
echo "KONEKSI GAGAL!!";
}else {
echo "";//Komen jika koneksi sudah berhasil
}
?>