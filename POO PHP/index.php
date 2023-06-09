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
    include "vehiculo.php";

    // Generamos nuestras instancias
    $ferrari = new Coche("rojo ferrari", "Ferrari", "La Ferrari");
    // $mazda = new Coche("rojo mazda", "Mazda", "A3");
    // $datsun = new Coche("azul", "Datsun", "68 bluebird");

    // Impirmimos los métodos de nuestras instancias
    $ferrari->arrancar();
    // $mazda->girar();
    // $datsun->frenar();
    // echo $datsun->ruedas;

    // Métodos setters y getters
    $ferrari->setMotor("1.6 cilindros");
    // $mazda->setMotor("1.2 cilindros");
    // $datsun->setMotor("1.4 cilindros");

    $ferrari->getColor();
    // $mazda->getColor();
    // $datsun->getColor();


    $optimus = new Camion("Azul y rojo", "Mercedes Benz", "Freightliner");

    $optimus->getColor();
    ?>
</body>

</html>