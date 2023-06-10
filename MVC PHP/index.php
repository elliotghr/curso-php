<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Modelo vista controlador (MVC)</h1>
    <?php
    // Debemos tratar todas las rutas (de la vista, modelo y controlador) tomando el index como raiz
    require_once "controller/Productos.php";
    ?>
</body>

</html>