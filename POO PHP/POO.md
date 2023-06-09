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
