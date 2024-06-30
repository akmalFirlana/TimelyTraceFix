<?php
session_start();
include 'koneksi.php';

$name = $_SESSION['username'];
$tableName = "tb_input_" . $name;

$sql_today = "SELECT COUNT(*) as count FROM $tableName WHERE DATE(tanggal) = CURDATE()";
$result_today = $conn->query($sql_today);
$row_today = $result_today->fetch_assoc();
$count_today = $row_today['count'];

$sql_week = "SELECT AVG(count) as avg_count FROM (
    SELECT COUNT(*) as count FROM $tableName WHERE WEEK(tanggal) = WEEK(CURDATE()) GROUP BY DATE(tanggal)
) as weekly_counts";
$result_week = $conn->query($sql_week);
$row_week = $result_week->fetch_assoc();
$avg_week = $row_week['avg_count'];

$sql_last7days = "SELECT DATE(tanggal) as date, COUNT(*) as count FROM $tableName WHERE tanggal >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) GROUP BY DATE(tanggal)";
$result_last7days = $conn->query($sql_last7days);
$data_last7days = [];
while ($row = $result_last7days->fetch_assoc()) {
    $data_last7days[] = $row;
}

$sql_notes = "SELECT nama, kelas, alasan, DATE(tanggal) as time FROM $tableName ORDER BY tanggal DESC LIMIT 3";
$result_notes = $conn->query($sql_notes);
$notes = [];
while ($row = $result_notes->fetch_assoc()) {
    $notes[] = $row;
}

$sql_class = "SELECT kelas, COUNT(*) as count FROM $tableName WHERE tanggal >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) GROUP BY kelas";
$result_class = $conn->query($sql_class);
$data_class = [];
while ($row = $result_class->fetch_assoc()) {
    $data_class[] = $row;
}

$conn->close();
?>
