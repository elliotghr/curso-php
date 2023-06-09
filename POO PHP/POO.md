# POO PHP

## Programación Orientada a Objetos POO I. Vídeo 22

La Programación Orientada a Objetos (POO) es un paradigma de programación que se basa en el concepto de "objetos". Un objeto es una entidad que contiene datos y métodos (funciones) relacionados entre sí. En POO, los programas se estructuran en torno a la interacción entre estos objetos.

La POO se basa en cuatro conceptos fundamentales:

1. Clases: Una clase es una plantilla o un modelo para crear objetos. Define las propiedades (atributos) y los comportamientos (métodos) que los objetos de esa clase tendrán.

2. Objetos: Un objeto es una instancia de una clase. Representa una entidad concreta y puede tener su propio estado (valores de atributos) y comportamiento (métodos).

3. Encapsulación: Es un principio que consiste en ocultar los detalles internos de implementación de un objeto y proporcionar una interfaz para interactuar con él. Los atributos y métodos de un objeto pueden ser públicos, protegidos o privados para controlar su acceso desde fuera de la clase.

4. Herencia: La herencia permite crear nuevas clases basadas en clases existentes, heredando sus atributos y métodos. La clase existente se denomina "clase padre" o "superclase", y la nueva clase se denomina "clase hija" o "subclase". La herencia permite reutilizar código y establecer relaciones jerárquicas entre las clases.

La POO ayuda a organizar y modularizar el código, facilita la reutilización de código, mejora la mantenibilidad y favorece la abstracción y la resolución de problemas de manera más intuitiva.

## Programación Orientada a Objetos POO II. Vídeo 23

En la programación orientada a objetos (POO), las propiedades y atributos son términos que se utilizan indistintamente para referirse a las variables asociadas a una clase u objeto. Estas variables representan características o información que define el estado de un objeto y se utilizan para almacenar datos.

Propiedades: Son variables definidas dentro de una clase que representan las características o atributos del objeto. Cada objeto creado a partir de la clase tendrá su propia copia de estas propiedades, con valores individuales. Las propiedades son accesibles desde dentro de la clase y también pueden ser accedidas desde fuera de la clase, dependiendo de los modificadores de acceso establecidos. En el ejemplo del carro, las propiedades son marca, modelo, color y velocidad.

Atributos: El término "atributo" se utiliza a menudo como sinónimo de "propiedad". Al igual que las propiedades, los atributos representan las características o información asociada a un objeto. Los atributos definen el estado de un objeto y están representados por variables. En resumen, un atributo es una propiedad de un objeto o clase.

Constructor: es un método especial dentro de una clase que se invoca automáticamente cuando se crea una instancia u objeto de esa clase. Su función principal es inicializar las propiedades o atributos del objeto con los valores deseados.

```php

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
```

## Programación Orientada a Objetos POO III. Vídeo 24

Cómo instanciamos nuestros Objetos con sus métodos?

```php

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
```

## Programación Orientada a Objetos POO IV. Herencia. Vídeo 25

La herencia es un concepto fundamental en la programación orientada a objetos (POO) que permite crear nuevas clases basadas en clases existentes. Es un mecanismo que permite a una clase adquirir las propiedades (atributos) y comportamientos (métodos) de otra clase, estableciendo una relación jerárquica entre ellas.

En POO, la clase existente se denomina "clase padre" o "superclase", y la nueva clase creada se denomina "clase hija" o "subclase". La clase hija hereda todos los atributos y métodos de la clase padre, y además puede agregar nuevos atributos y métodos, modificar los existentes o incluso definir sus propios métodos especializados.

La herencia proporciona varios beneficios, entre ellos:

Reutilización de código: Al heredar propiedades y métodos de una clase padre, la clase hija puede aprovechar y reutilizar el código existente, evitando la duplicación y mejorando la eficiencia.

Abstracción y generalización: La herencia permite establecer una relación de generalización y especialización entre las clases. La clase padre puede representar una entidad más general, mientras que las clases hijas pueden representar entidades más específicas con características adicionales o modificaciones.

Polimorfismo: Las clases hijas pueden proporcionar implementaciones específicas de los métodos heredados de la clase padre, lo que permite el polimorfismo. Esto significa que se pueden invocar los mismos métodos de diferentes objetos, pero ejecutarán comportamientos diferentes según la clase a la que pertenezcan.

