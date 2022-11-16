
<?php

$baseescollida = "";
$consultaInput = "";

$baseescollidaErr = "";
$consultaInputErr = "";

$textConsulta = "";
$mantenirBase = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["bbdd"])) {
        $baseescollidaErr = "Has de seleccionar una base de dades";
    } else {
        $baseescollida = $_POST["bbdd"];
        $mantenirBase = $baseescollida;
    }

    if (empty($_POST["consultar"])) {
        $consultaInputErr = "Has de introduir una consulta ";
    } else {
        $consultaInput = $_POST["consultar"];
        $textConsulta = $consultaInput;
    }
}
