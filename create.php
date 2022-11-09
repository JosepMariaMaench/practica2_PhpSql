<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = $baseescollida;
$iscreated = false;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS SqlHistory (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sentence TEXT NOT NULL,
    executed_at DATETIME DEFAULT TIMESTAMP,
    )";

if ($conn->query($sql) === true) {
    echo "The table is created successfully";
    $iscreated = true;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $iscreated = false;
}
$conn->close();
