<?php

$nombre = $_POST["nombre"];
$asignatura = $_POST["asignatura"];
$frutas = $_POST["frutas"];

echo $nombre . '<br>';
var_dump($asignatura);
echo '<br>';
var_dump($frutas);
echo '<br>';
echo '<br>';
echo '<br>';
// $nombre = $_GET["nombre"];
// $asignatura = $_GET["asignatura"];
// $frutas = $_GET["frutas"];

// echo $nombre . '<br>';
// echo $asignatura . '<br>';
// echo $frutas . '<br>';

foreach ($asignatura as $key => $value) {
    echo $value . '<br>';
}


if (isset($nombre, $asignatura, $frutas)) {
    echo "Los tres datos están correctos";
}
