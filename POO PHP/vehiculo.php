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
    public function __construct($color, $marca, $modelo)
    {
        $this->velocidad = 0;
        $this->motor;
        $this->ruedas = 4;
        $this->color = $color;
        $this->modelo = $modelo;
        $this->marca = $marca;
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
    // Metodos setters y getters
    function setMotor($motor)
    {
        $this->motor = $motor;
        echo "El motor del $this->marca, modelo $this->modelo es $this->motor <br>";
    }
    function getColor()
    {
        echo "El color del $this->marca, modelo $this->modelo es $this->color <br>";
    }
}


class Camion
{
    // Propiedades
    private $marca;
    private $modelo;
    private $color;
    var $ruedas;
    private $motor;
    private $velocidad;

    // Constructor -> Estado Inicial -> el método puede definirse como __construct o el nombre de la clase
    public function __construct($color, $marca, $modelo)
    {
        $this->velocidad = 0;
        $this->motor;
        $this->ruedas = 4;
        $this->color = $color;
        $this->modelo = $modelo;
        $this->marca = $marca;
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
    // Metodos setters y getters
    function setMotor($motor)
    {
        $this->motor = $motor;
        echo "El motor del $this->marca, modelo $this->modelo es $this->motor <br>";
    }
    function getColor()
    {
        echo "El color del $this->marca, modelo $this->modelo es $this->color <br>";
    }
}
