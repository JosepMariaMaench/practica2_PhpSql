<?php

include_once 'create.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *
FROM SqlHistory
ORDER BY executed_at ASC; )";

if ($conn->query($sql) === true) {
    echo "The table is created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
