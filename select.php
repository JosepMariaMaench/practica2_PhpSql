<!DOCTYPE html>
<html lang="en"></html>
<body>
<?php

include_once 'create.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = $baseecollida;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sqlSelect = "SELECT id, sentence, executed_at
FROM SqlHistory
ORDER BY executed_at DESC; )";

$resultSelect = $conn->query($sqlSelect);


$conn->close();
if ($iscreated = true) {
    if ($conn->query($sql) === true) {
        if ($resultSelect->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Sentence</th><th>Executed_at</th></tr>";
            while ($row = $resultSelect->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>"
                . $row["sentence"]
                . "</td><input type = 'submit' name = 'contenido' value = 'Executed_at'>"
                . $row["executed_at"] . "</input></tr>";
            }
            echo "</table>";
        } else {
            echo "No s'han trobat resultats a la taula.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "La taula no esta creada";
}

?>
</body>
