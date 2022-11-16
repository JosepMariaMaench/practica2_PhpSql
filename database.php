<?php

require_once 'server.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";


// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT schema_name FROM information_schema.schemata;";

$databaseXampp = $conn->query($sql);
