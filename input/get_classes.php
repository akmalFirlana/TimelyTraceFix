<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_timelytrace";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_SESSION['username'];
$kelasname = "kelas_" . $name;

// Fetch classes from the database
$sql = "SELECT nama_kelas FROM $kelasname";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Class</title>
</head>
<body>
    <form>
        <label for="classes">Choose a class:</label>
        <select id="classes" name="classes">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<option value="' . htmlspecialchars($row["nama_kelas"]) . '">' . htmlspecialchars($row["nama_kelas"]) . '</option>';
                }
            } else {
                echo '<option value="">No classes available</option>';
            }
            $conn->close();
            ?>
        </select>
    </form>
</body>
</html>
