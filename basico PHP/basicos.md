# Curso PHP

## Tipos de datos

1. Booleanos
2. Enteros
3. Flotantes
4. Cadenas

## Variables

1. En PHP las variables se representan con un signo de dolar, seguido por el nombre de la variable
2. Un nombre de variabel valido tiene que emepzar con una letra o un caracter subrayado (guion bajo), seguido de cualquier numero de letras, numeros y caracteres de subrayado
3. El nombre de la variable es sensible a minusculas y mayusculas.

```php
## Variables
$nombre_nano = "Nano";
echo "Hola, mi nombre es $nombre_nano" . '<br>';
```

## Constante

En programación una constante es un valor que no puede ser alterado/modificado durante la ejecucuón del programa

1. El nombre de una constante sigue las mismas reglas que cualquier variable de PHP. Un nombre de constante válido empieza por una letra o guión bajo, seguido de cualquier número de letras, números o guiones bajos.
2. Por defecto, una constante distingue mayúsculas y minúsculas.
3. Por convención, los identificadores de constantes siempre se declaran en mayúsculas.
4. A partir de PHP 7 se pueden definir arrays en una constante

```php
const PI2 = 3.1416;
echo PI2 . '<br>';
const ARRAYNUMBER = array(1, 2, 3, 4, 5);
echo ARRAYNUMBER[2] . '<br>';
```

## Arrays

En PHP, un array es una estructura de datos que puede contener múltiples valores bajo una única variable. Puedes pensar en un array como un conjunto ordenado de elementos, donde cada elemento tiene una posición numérica llamada índice. Puedes almacenar diferentes tipos de datos en un array, como números, cadenas de texto, booleanos e incluso otros arrays.

Los arrays se definen de la siguiente manera:

- Escalares

Son aquellos en los que para acceder a los elementos utilizamos un indice que representa la posición del valor dentro del array comenzando desde el indice 0

```php
$new_array = array(1,2,3,4);
echo $new_array[3];

$second_array = ["Hola", 2, "Mundo", 4];
echo $second_array[2];
```

- Asociativos

Para acceder a los elementos del array utilizamos la clave asociada con el elemento donde este toma un cierto numero de parejas utilizando la sintaxis clave => valor como argumentos

```php
$tutor = ["nombre" => "Elliot", "apellido" => "Gandarilla"];
echo $tutor["nombre"];
# Elliot
```

- Multidimensionales

Un array multidimensional es aquel cuyos valores son otros arrays. Para acceder a sus elementos, se tienen que indicar los índices de cada una de sus dimensiones, utilizando tantos pares de corchetes como dimensiones se definan en el array.

```php
$tutor_2 = ["nombre" => "Elliot", "apellido" => "Gandarilla", "mascotas" => ["Nano", "Mosho", "Cricri", "Pelu"]];
echo $tutor_2["mascotas"][0];
# Nano
```

## Concatenación

Unir strings o variables

```php
$nombre = "Elliot";
$apellido = "Gandarilla";
$edad = "26";

echo $nombre . $apellido . $edad;
```

## Interpolación

Combinar variables con strings

```php
$nombre = "Elliot";
$apellido = "Gandarilla";
$edad = "26";

echo "Mi nombre es $nombre $apellido y tengo $edad años";
```

## Operadores Aritmeticos

Los operadores aritméticos en PHP son herramientas utilizadas para realizar operaciones matemáticas en variables numéricas. Estos operadores permiten realizar sumas, restas, multiplicaciones, divisiones y otras operaciones básicas. A continuación, se explica cada uno de los operadores aritméticos en PHP:

Operador de suma (+): El operador de suma se utiliza para sumar dos valores. Por ejemplo:

```php
$a = 5;
$b = 3;
$resultado = $a + $b; // El valor de $resultado será 8
```

Operador de resta (-): El operador de resta se utiliza para restar un valor de otro. Por ejemplo:

```php
$a = 10;
$b = 4;
$resultado = $a - $b; // El valor de $resultado será 6
```

Operador de multiplicación (\*): El operador de multiplicación se utiliza para multiplicar dos valores. Por ejemplo:

```php
$a = 2;
$b = 5;
$resultado = $a * $b; // El valor de $resultado será 10
```

Operador de división (/): El operador de división se utiliza para dividir un valor entre otro. Por ejemplo:

```php
$a = 15;
$b = 3;
$resultado = $a / $b; // El valor de $resultado será 5
```

Operador de módulo (%): El operador de módulo se utiliza para obtener el resto de una división. Por ejemplo:

```php
$a = 10;
$b = 3;
$resultado = $a % $b; // El valor de $resultado será 1
```

Operador de incremento (++): El operador de incremento se utiliza para aumentar en uno el valor de una variable. Puede ser utilizado tanto en prefijo como en sufijo. Por ejemplo:

```php
$a = 5;
$a++; // El valor de $a será 6
++$a; // El valor de $a será 7
```

Operador de decremento (--): El operador de decremento se utiliza para disminuir en uno el valor de una variable. También puede ser utilizado en prefijo o sufijo. Por ejemplo:

```php
$a = 8;
$a--; // El valor de $a será 7
--$a; // El valor de $a será 6
```

## Operadores de asignación

Los operadores de asignación en PHP se utilizan para asignar valores a variables. Estos operadores permiten actualizar el valor de una variable utilizando diferentes operaciones en combinación con la asignación. A continuación, se explica cada uno de los operadores de asignación en PHP:

Operador de asignación (=): El operador de asignación básico se utiliza para asignar un valor a una variable. Por ejemplo:

```php
$numero = 10; // Asigna el valor 10 a la variable $numero
$texto = "Hola"; // Asigna el valor "Hola" a la variable $texto
```

Operador de asignación combinada (+=, -=, \*=, /=, %=): Estos operadores combinados permiten realizar una operación y asignar el resultado a la misma variable. Por ejemplo:

```php
$numero = 5;
$numero += 3; // Equivale a $numero = $numero + 3; el valor de $numero será 8

$valor = 10;
$valor -= 4; // Equivale a $valor = $valor - 4; el valor de $valor será 6

$cantidad = 2;
$cantidad *= 5; // Equivale a $cantidad = $cantidad * 5; el valor de $cantidad será 10

$contador = 15;
$contador /= 3; // Equivale a $contador = $contador / 3; el valor de $contador será 5

$resto = 10;
$resto %= 3; // Equivale a $resto = $resto % 3; el valor de $resto será 1
```

Operador de concatenación (.=): El operador de concatenación se utiliza para unir cadenas de texto y asignar el resultado a una variable. Por ejemplo:

```php
$mensaje = "Hola";
$mensaje .= " mundo"; // Equivale a $mensaje = $mensaje . " mundo"; el valor de $mensaje será "Hola mundo"
```

## Operadores de comparación

Los operadores de comparación en PHP se utilizan para comparar dos valores y evaluar si se cumple una condición. Estos operadores devuelven un valor booleano (true o false) según el resultado de la comparación. A continuación, se explican los operadores de comparación en PHP:

Operador de igualdad (==): Este operador compara si dos valores son iguales, sin tener en cuenta el tipo de dato. Por ejemplo:

```php
$a = 5;
$b = "5";
$resultado = ($a == $b); // El valor de $resultado será true, ya que 5 es igual a "5"
```

Operador de identidad (===): Este operador compara si dos valores son iguales y del mismo tipo de dato. Por ejemplo:

```php
$a = 5;
$b = "5";
$resultado = ($a === $b); // El valor de $resultado será false, ya que 5 no es igual a "5" en términos de tipo de dato
```

Operador de desigualdad (!= o <>): Estos operadores comparan si dos valores no son iguales, sin tener en cuenta el tipo de dato. Por ejemplo:

```php
$a = 5;
$b = 3;
$resultado = ($a != $b); // El valor de $resultado será true, ya que 5 no es igual a 3
```

Operador de no identidad (!==): Este operador compara si dos valores no son iguales o no tienen el mismo tipo de dato. Por ejemplo:

```php
$a = 5;
$b = "5";
$resultado = ($a !== $b); // El valor de $resultado será true, ya que 5 no es igual a "5" en términos de tipo de dato
```

Operador de mayor que (>), menor que (<), mayor o igual que (>=), menor o igual que (<=): Estos operadores comparan si un valor es mayor, menor, mayor o igual o menor o igual que otro valor. Por ejemplo:

```php
$a = 7;
$b = 5;
$resultado = ($a > $b); // El valor de $resultado será true, ya que 7 es mayor que 5

$c = 3;
$d = 5;
$resultado = ($c < $d); // El valor de $resultado será true, ya que 3 es menor que 5

$e = 5;
$f = 5;
$resultado = ($e >= $f); // El valor de $resultado será true, ya que 5 es mayor o igual que 5

$g = 5;
$h = 5;
$resultado = ($g <= $h); // El valor de $resultado será true, ya que 5 es menor o igual que 5
```

## Operadores lógicos

Los operadores lógicos en PHP se utilizan para combinar y evaluar expresiones lógicas. Estos operadores permiten realizar operaciones booleanas, como la negación, conjunción y disyunción. A continuación, se explican los operadores lógicos en PHP:

Operador de negación (!): Este operador se utiliza para negar una expresión booleana. Si la expresión es verdadera, la negación la convierte en falsa, y si la expresión es falsa, la negación la convierte en verdadera. Por ejemplo:

```php
$a = true;
$resultado = !$a; // El valor de $resultado será false, ya que se niega la expresión $a que es verdadera
```

Operador de conjunción (&& o and): Estos operadores se utilizan para evaluar si dos expresiones son verdaderas. El resultado será verdadero si ambas expresiones son verdaderas; de lo contrario, el resultado será falso. Por ejemplo:

```php
$a = true;
$b = false;
$resultado = ($a && $b); // El valor de $resultado será false, ya que una de las expresiones ($b) es falsa
```

Operador de disyunción (|| o or): Estos operadores se utilizan para evaluar si al menos una de las dos expresiones es verdadera. El resultado será verdadero si una o ambas expresiones son verdaderas; de lo contrario, el resultado será falso. Por ejemplo:

```php
$a = true;
$b = false;
$resultado = ($a || $b); // El valor de $resultado será true, ya que al menos una de las expresiones ($a) es verdadera
```

Operador de disyunción exclusiva (xor): Este operador se utiliza para evaluar si solo una de las dos expresiones es verdadera, pero no ambas. El resultado será verdadero si una de las expresiones es verdadera y la otra es falsa; de lo contrario, el resultado será falso. Por ejemplo:

```php
$a = true;
$b = false;
$resultado = ($a xor $b); // El valor de $resultado será true, ya que solo una de las expresiones ($a) es verdadera
```

## Operador de incremento / decremento

Los operadores de incremento y decremento en PHP se utilizan para aumentar o disminuir el valor de una variable numérica en una unidad. Estos operadores pueden aplicarse tanto en forma de prefijo como en forma de sufijo. A continuación, se explican los operadores de incremento y decremento en PHP:

Operador de incremento (++): El operador de incremento se utiliza para aumentar en uno el valor de una variable. Si se utiliza en forma de sufijo, primero se devuelve el valor original y luego se incrementa. Si se utiliza en forma de prefijo, primero se incrementa y luego se devuelve el nuevo valor. Por ejemplo:

```php
$a = 5;
$b = $a++; // El valor de $b será 5, y luego $a será 6

$c = 10;
$d = ++$c; // El valor de $d será 11, y luego $c será 11
```

Operador de decremento (--): El operador de decremento se utiliza para disminuir en uno el valor de una variable. Al igual que el operador de incremento, si se utiliza en forma de sufijo, primero se devuelve el valor original y luego se decrementa. Si se utiliza en forma de prefijo, primero se decrementa y luego se devuelve el nuevo valor. Por ejemplo:

```php
$a = 8;
$b = $a--; // El valor de $b será 8, y luego $a será 7

$c = 15;
$d = --$c; // El valor de $d será 14, y luego $c será 14
```

Estos operadores son útiles cuando necesitas realizar operaciones aritméticas simples en una variable, como aumentar o disminuir un contador. Sin embargo, es importante tener en cuenta su uso y ubicación en el código, ya que su aplicación puede tener efectos inesperados si no se comprende completamente su comportamiento.

Además de utilizar los operadores de incremento y decremento en variables numéricas, también puedes aplicarlos a elementos de un array utilizando su índice. Por ejemplo:

```php
$array = [1, 2, 3];
$array[1]++; // Aumenta en uno el valor en la posición 1 del array (2), ahora será 3
```

## Importaciones en php

En PHP, tanto "include" como "require" se utilizan para incluir archivos en un script. Ambas instrucciones permiten la reutilización de código al incorporar contenido desde otros archivos. Sin embargo, hay algunas diferencias clave entre "include" y "require". A continuación, se detallan estas diferencias:

1. Comportamiento en caso de error:

- "include": Si el archivo incluido no se encuentra o se produce un error al incluirlo, PHP mostrará una advertencia, pero el script continuará ejecutándose.
- "require": Si el archivo requerido no se encuentra o se produce un error al requerirlo, PHP mostrará un error fatal y detendrá la ejecución del script.

2. Importancia de la inclusión:

- "include": La inclusión con "include" es considerada como opcional. Si el archivo no se encuentra, se mostrará una advertencia y el script continuará ejecutándose.
- "require": La inclusión con "require" se considera como esencial. Si el archivo no se encuentra, se producirá un error fatal y la ejecución del script se detendrá.

3. Uso recomendado:

- "include": Se utiliza principalmente cuando se desea incluir contenido externo que no es crítico para la funcionalidad principal del script.
- "require": Se utiliza cuando se necesita incluir contenido esencial que es necesario para que el script funcione correctamente.

```sql
include 'archivo.php';
include_once 'archivo.php';

require 'archivo.php';
require_once 'archivo.php';
```

## Funciones (propias)

En PHP, las funciones propias (también conocidas como funciones personalizadas o funciones definidas por el usuario) son bloques de código reutilizables que se crean para realizar tareas específicas. Estas funciones permiten organizar y modularizar el código, evitando la repetición y facilitando el mantenimiento y la legibilidad del mismo.

Al definir una función propia, le das un nombre y defines una secuencia de instrucciones que se ejecutarán cada vez que se llame a esa función. Las funciones propias pueden aceptar parámetros de entrada y pueden devolver un valor como resultado.

Aquí tienes un ejemplo básico de cómo se define una función propia en PHP:

```php
function saludar($nombre) {
    echo "Hola, $nombre!";
}
```

En este ejemplo, se define una función llamada "saludar" que acepta un parámetro llamado "$nombre". Cuando la función se llama con un argumento, como saludar("Juan"), se imprimirá el mensaje "Hola, Juan!".

Además de recibir parámetros, las funciones propias también pueden devolver un valor utilizando la palabra clave "return". Aquí tienes un ejemplo que muestra cómo se puede definir una función que realiza una operación y devuelve el resultado:

```php
function suma($a, $b) {
    $resultado = $a + $b;
    return $resultado;
}
```

En este caso, la función "suma" recibe dos parámetros, "$a" y "$b", realiza la suma y devuelve el resultado mediante la declaración "return". Puedes utilizar esta función y asignar el resultado a una variable, como $resultado = suma(3, 4);, para obtener el valor de la suma.

Las funciones propias pueden ser llamadas desde cualquier parte del script una vez que se han definido. Puedes utilizarlas para encapsular tareas comunes, realizar cálculos, manipular datos, interactuar con bases de datos y mucho más. Al definir tus propias funciones, puedes estructurar tu código de manera más modular y reutilizable, lo que facilita la mantenibilidad y promueve buenas prácticas de programación.

## FORMATEAR NUMERO o CANTIDADES de DINERO en PHP

```php
$cantidad_1 = 16354.5;

// cantidad, número de decimales, separador decimal, separador millares
$cantidad_2 = number_format($cantidad_1,2,".",",")
# resultado: 16,354.50
```

## Date

Primero definimos la zona horaria con:

```php
date_default_timezone_set("America/Mexico_City");
```

Posteriormente ocupamos date:

```php
echo date("d-m-y");
echo "<br>";
echo date("Y/m/d");
```

## Cómo encriptar una contraseña o clave

La encriptación de contraseñas es una práctica importante para garantizar la seguridad de los datos sensibles de los usuarios. En PHP, el método password_hash() se utiliza para encriptar contraseñas de manera segura. Dos constantes importantes que se pueden utilizar como opciones de encriptación son PASSWORD_BCRYPT y PASSWORD_DEFAULT. A continuación, se explica el proceso de encriptación de contraseñas utilizando estos métodos:

Método PASSWORD_BCRYPT:
El método PASSWORD_BCRYPT utiliza el algoritmo de cifrado bcrypt para generar un hash seguro de la contraseña. Este método es ampliamente recomendado debido a su resistencia a los ataques de fuerza bruta y su capacidad para ajustar automáticamente la "sal" y el costo del hash.
Aquí tienes un ejemplo de cómo encriptar una contraseña utilizando PASSWORD_BCRYPT:

```php
$contrasena = 'mi_contrasena';
$hash = password_hash($contrasena, PASSWORD_BCRYPT);
```

En este ejemplo, la variable $contrasena contiene la contraseña que deseas encriptar. Luego, utilizas la función password_hash() pasando la contraseña y la constante PASSWORD_BCRYPT como argumentos. La función generará un hash bcrypt seguro para la contraseña.

Método PASSWORD_DEFAULT:
La constante PASSWORD_DEFAULT se utiliza para utilizar el algoritmo de encriptación predeterminado actualmente en PHP. Este valor puede cambiar a medida que las versiones de PHP se actualizan y se introducen nuevos algoritmos de encriptación más seguros. Esto garantiza que tu código se mantenga compatible con las últimas prácticas de seguridad sin tener que realizar cambios en tu código.
Aquí tienes un ejemplo de cómo encriptar una contraseña utilizando PASSWORD_DEFAULT:

```php
$contrasena = 'mi_contrasena';
$hash = password_hash($contrasena, PASSWORD_DEFAULT);
```

En este caso, el proceso es similar al método anterior, pero utilizando PASSWORD_DEFAULT como opción de encriptación. PHP utilizará el algoritmo de encriptación predeterminado actual para generar el hash de la contraseña.

Es importante tener en cuenta que tanto PASSWORD_BCRYPT como PASSWORD_DEFAULT generan hashes únicos cada vez que se ejecutan. Estos hashes incluyen automáticamente una "sal" única que se utiliza para fortalecer la seguridad de las contraseñas.

Para verificar si una contraseña coincide con un hash encriptado, se utiliza la función password_verify(). Aquí tienes un ejemplo:

```php
$contrasena = 'mi_contrasena';
$hash = password_hash($contrasena, PASSWORD_BCRYPT);

// Verificar la contraseña
if (password_verify($contrasena, $hash)) {
    echo 'La contraseña es correcta.';
} else {
    echo 'La contraseña es incorrecta.';
}
```

En este ejemplo, se encripta la contraseña y luego se verifica si coincide utilizando password_verify(). Si la contraseña proporcionada coincide con el hash encriptado, se imprimirá el mensaje "La contraseña es correcta".

En resumen, la encriptación de contraseñas es una práctica esencial para proteger la información confidencial de los usuarios. Los métodos PASSWORD_BCRYPT y PASSWORD_DEFAULT en PHP proporcionan opciones seguras y actualizadas para encriptar contraseñas de manera confiable. Recuerda utilizar siempre estas funciones para almacenar las contraseñas de manera segura en tu aplicación.
