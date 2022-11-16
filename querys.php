<?php

require_once 'server.php';
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = $baseescollida;

        $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query($consultaInput) ;

    $sql = "CREATE TABLE IF NOT EXISTS SqlHistory (
        id INT AUTO_INCREMENT PRIMARY KEY,
        sentence TEXT NOT NULL,
        executed_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";

    if ($conn->query($sql) === true) {
            echo "The table is created successfully" . "<br>";
            $iscreated = true;
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $iscreated = false;
    }

    $insert = "INSERT INTO sqlhistory (sentence) VALUES ('$textConsulta')";

    if ($conn->query($insert) === true) {
            echo "Los datos han sido insertados";
    } else {
            echo "Error: " . $insert . "<br>" . $conn->error;
    }
}
