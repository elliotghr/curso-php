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
    <h1>Hola, index</h1>
    <!-- <?php
            echo "Has recargado esta página " . $_SESSION["contador"] . " veces";
            ?> -->

    <form action="login.php" method="post">
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="password" placeholder="Pas" name="pass">
        <button>Enviar</button>
    </form>
</body>

</html>