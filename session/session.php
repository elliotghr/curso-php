<?php
// Cambiamos el nombre de la sesión
session_name("LOGIN");
session_start();

if (isset($_SESSION["contador"])) {
    $_SESSION["contador"]++;
} else {
    $_SESSION["contador"] = 1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hola, session</h1>
    <!-- <?php
            echo "Has recargado esta página " . $_SESSION["contador"] . " veces";
            ?> -->
    <br><br>
    <a href="index.php">Inicio</a>
    <br>
    <a href="cerrar.php">Eliminar sesion</a>

    <?php
    echo '<p>Hola! ' . $_SESSION["nombre"] . '</p> <br>';
    echo '<p>Edad: ' . $_SESSION["edad"] . '</p> <br>';
    echo '<p>Pais: ' . $_SESSION["pais"] . '</p> <br>';
    ?>
</body>

</html>