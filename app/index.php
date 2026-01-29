<?php
$servername = "mysql";
$username = "root";
$password = "rootpass";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("❌ DB Connection failed: " . $conn->connect_error);
}

echo "✅ Connected to MySQL Successfully using Docker Compose!";
?>
