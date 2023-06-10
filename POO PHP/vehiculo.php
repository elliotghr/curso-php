<?php
// Creamos una clase Coche
// La primera letra debe ser mayuscula
class Coche
{
    // Propiedades
    private $marca;
    private $modelo;
    private $color;
    protected $ruedas;
    protected $motor;
    private $velocidad;

    // Constructor -> Estado Inicial -> el método puede definirse como __construct o el nombre de la clase
    public function __construct($color, $marca, $modelo)
    {
        $this->velocidad = 0;
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
    function set_motor($motor)
    {
        $this->motor = $motor;
    }
    function get_color()
    {
        echo "El color del $this->marca, modelo $this->modelo es $this->color <br>";
    }
    function get_ruedas()
    {
        echo "El coche tiene $this->ruedas ruedas <br>";
    }
    function get_motor()
    {
        echo "El coche tiene un motor de  $this->motor <br>";
    }
}


class Camion extends Coche
{
    public function __construct($color, $marca, $modelo)
    {
        // Llamamos al método constructor del padre
        parent::__construct($color, $marca, $modelo);
        // Sobreescribimos el valor de ruedas
        $this->ruedas = 8;
    }

    // Sobreescritura de métodos
    // Simplemente reescribimos el método con el mismo nombre y modificamos su contenido
    function getRuedas()
    {
        echo "El camion tiene $this->ruedas ruedas <br>";
    }
    // parent, llamamos al método de la clase padre

    // Reutilizando métodos del padre con parent::
    function arrancar()
    {
        // Con parent le decimos que ejecute el método de la clase padre
        parent::arrancar();
        echo "Camión arrancado <br>";
    }
    function get_motor()
    {
        echo "El camion tiene un motor de  $this->motor <br>";
    }
}
