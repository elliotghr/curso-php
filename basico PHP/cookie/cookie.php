<?php
setcookie("nombre", "juan", time() +60 * 60 * 24);
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
    <h1>Hola, cookies!</h1>
    <?php
    echo "<p>" . $_COOKIE['nombre'] . "</p>";
    ?>
</body>

</html>