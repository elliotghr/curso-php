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

    // Creamos una clase Coche
    // La primera letra debe ser mayuscula
    class Coche
    {
        // Propiedades
        private $marca;
        private $modelo;
        private $color;
        var $ruedas;
        private $motor;
        private $velocidad;

        // Constructor -> Estado Inicial -> el método puede definirse como __construct o el nombre de la clase
        public function __construct()
        {
            $this->velocidad = 0;
            $this->motor;
            $this->ruedas = 4;
            $this->color;
            $this->modelo;
            $this->marca;
        }

        // Metodos
        function arrancar()
        {
            echo "Estoy arrancando <br>";
        }
        function girar()
        {
            echo "Estoy girando <br>";
        }
        function frenar()
        {
            echo "Estoy frenando <br>";
        }
    }
    // Generamos nuestras instancias
    $ferrari = new Coche();
    $mazda = new Coche();
    $datsun = new Coche();

    // Impirmimos los métodos de nuestras instancias
    echo $ferrari->arrancar();
    echo $mazda->girar();
    echo $datsun->frenar();
    echo $datsun->ruedas;

    ?>
</body>

</html>