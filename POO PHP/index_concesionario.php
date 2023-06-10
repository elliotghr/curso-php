<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "Concesionario.php";
    // Accediendo y manipulando a un campo estatico
    // (El cual es un problema por la encapsulación que debe tener)
    
    Compra_vehiculo::$ayuda = 20000;
    $compra_Antonio = new Compra_vehiculo("compacto");

    $compra_Antonio->climatizador();
    $compra_Antonio->tapiceria_cuero("blanco");

    echo "$" . $compra_Antonio->precio_final();

    echo "<br>";

    $compra_Nano = new Compra_vehiculo("compacto");

    $compra_Nano->climatizador();
    $compra_Nano->tapiceria_cuero("rojo");



    echo "$" . $compra_Nano->precio_final();
    ?>
</body>

</html>