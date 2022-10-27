<?php

require_once 'server.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($mensaje = "" && $nomError == "" && $cognomError == "" && $emailError == "" && $contraError == "" && $confcontraError  == "" && $datacaducaError == "" && $numtargError == "" && $codsegurError == "") {
        $sql = "INSERT INTO usuaris (nom, cognom, email, contrassenya, direccio, numtargeta, datacaduca, codiseguretat) 
        VALUES ('$name', '$lastname', '$email', '$contra', '$direccio', '$numtarg', '$datcaduca', '$codsegur')";
        if ($conn->query($sql) === true) {
            echo "New record created successfully";
            $_SESSION['id'] = $conn->insert_id;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
