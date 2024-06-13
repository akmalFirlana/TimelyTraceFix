<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_Timelytrace";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch classes from the database
$sql = "SELECT nama_kelas FROM kelas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . htmlspecialchars($row["nama_kelas"]) . '">' . htmlspecialchars($row["nama_kelas"]) . '</option>';
    }
} else {
    echo '<option value="">No classes available</option>';
}

$conn->close();
?>
