## 43 ENVIAR FORMULARIOS con METODO GET & POST

- Los elementos del formulario deben tener el atributo name para poder recibirlos con GET en PHP

  Ejemplo

  ```php
  <label for="nombre">Nombre</label>
  <input type="text" id="nombre" name="nombre">
  ```

- Nuestro formulario debe tener los siguientes atributos:

  - el atributo action con el destino a enviar los datos.
  - el atributo method de la petición (GET, POST).

  ```php
    <form action="getData.php" method="POST">
    <form action="getData.php" method="GET">
  ```

- En el archivo destino recibimos los datos con $\_POST["name_input"] o $\_GET["name_input"];

```php
// Archivo getData.php


// Con el metodo POST los datos no se verán en la url
$nombre = $_POST["nombre"];
$asignatura = $_POST["asignatura"];
$frutas = $_POST["frutas"];
// URL -> http://localhost/php/getData.php

// Con el metodo GET los datos se verán en la url
$nombre = $_GET["nombre"];
$asignatura = $_GET["asignatura"];
$frutas = $_GET["frutas"];
// URL -> http://localhost/php/getData.php?nombre=web&asignatura=ingles&frutas=Manzana
```

## 44 SELECT y CHECKBOX multiples en FORMULARIOS PHP

- En los selects añadimos el atributo 'multiple' y agregamos corchetes al valor del atributo name:

  ```php
  <select name="asignatura[]" id="asignatura" multiple>
      <option value="ingles">ingles</option>
      <option value="ciencia">ciencia</option>
  </select>
  ```

- En los checkbox agregamos corchetes al valor del atributo name de cada input:

  ```php
  <label for="opcion-1">
    <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]">
    Manzana
    </input>
  </label>

  <label for="opcion-2">
    <input type="checkbox" value="Pera" id="opcion-2" name="frutas[]">
    Pera
    </input>
  </label>

  <label for="opcion-3">
    <input type="checkbox" value="Uva" id="opcion-3" name="frutas[]">
    Uva
    </input>
  </label>
  ```

## 45 SABER si una VARIABLE esta VACIA o DEFINIDA con isset()

### is_null()

En PHP, la función is_null() se utiliza para comprobar si una variable tiene el valor null. Retorna true si la variable es null y false en caso contrario.

La sintaxis básica de is_null() es la siguiente:

```PHP
is_null($variable);
```

Donde $variable es el nombre de la variable que deseas comprobar.

Ejemplo:

```php
$edad = null;
if (is_null($edad)) {
    echo "La variable edad es null.";
} else {
    echo "La variable edad no es null.";
}
```

### empty()

En PHP, la función empty() se utiliza para comprobar si una variable está vacía, lo que significa que tiene uno de los siguientes valores:

- Un valor que se evalúa como false, como false, 0, '' (cadena vacía), array() (array vacío), null, entre otros.
- Una variable que no está definida o no existe.
  La sintaxis básica de empty() es la siguiente:

```php
empty($variable);
```

Donde $variable es el nombre de la variable que deseas comprobar.

```php
$edad = null;
if (empty($edad)) {
echo "La variable edad está vacía.";
} else {
echo "La variable edad no está vacía.";
}
```

### isset()

En PHP, la función isset() se utiliza para comprobar si una variable está definida y tiene un valor asignado. Retorna true si la variable existe y tiene un valor, y false si la variable no está definida o su valor es null.

La sintaxis básica de isset() es la siguiente:

```PHP
isset($variable);
```

Donde $variable es el nombre de la variable que deseas comprobar.

Ejemplo

```PHP
$edad = null;
if (isset($edad)) {
    echo "La variable edad está definida y tiene valor.";
} else {
    echo "La variable edad no está definida o no tiene valor.";
}
```

La función isset() también puede utilizarse para comprobar si múltiples variables están definidas simultáneamente. Puedes pasar múltiples variables separadas por comas como argumentos a isset():

```PHP
$nombre = "Juan";
$edad = 30;
if (isset($nombre, $edad)) {
    echo "Tanto la variable nombre como la variable edad están definidas.";
} else {
    echo "Al menos una de las variables no está definida.";
}
```

## 46 SUBIR o ENVIAR ARCHIVOS a SERVIDOR PHP con FORMULARIOS

Para subir archivos en PHP necesitamos lo siguiente:

- Un formulario con el method POST y el atributo enctype="multipart/form-data"

```php
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fichero">
    <br><br>
    <button type="submit">Enviar</button>
</form>
```

- Recibir los archivos con $\_FILES[]

$archivo = $\_FILES["fichero"];

```php
var_dump($archivo);

echo ($archivo["name"]);
echo ($archivo["type"]);
echo ($archivo["tmp_name"]);
echo ($archivo["error"]);
echo ($archivo["size"]);
```

- Para mover el archivo a nuestra carpeta del servidor hacemos uso de la funcion: move_uploaded_file

```php
if (move_uploaded_file($archivo["tmp_name"], 'assets/' . $archivo["name"])) {
    echo "El archivo se subió correctamente";
} else {
    echo "Ha ocurrido un error";
}
```

- Para crear una carpeta si no existe:

```php
  if (!file_exists('assets')) {
    if (!mkdir("assets", 0777)) {
        echo "Error al crear el directorio";
        exit();
    }
}
```

### Aceptar ciertos archivos

Para aceptar solo ciertos archivos se puede hacer de dos maneras:

- HTML: Agregamos el atributo accept especificando la extensión de los archivos aceptados

  ```php
  <input type="file" name="fichero" accept=".jpg, .png, .jpeg">
  ```

  Este metodo es inseguro porque se puede modificar el código HTML y eliminar este atributo

- PHP: Creamos una validación con el método mime_content_type para comparar el tipo de archivo que se está subiendo:

  ```php
  # mime_content_type trae el tipo de archivo, este se compara con el tipo de archivo que especificamos, si no coincide con lo especificado salimos del flujo del programa
  if (mime_content_type($archivo["tmp_name"]) != "image/png" && mime_content_type($archivo["tmp_name"]) != "image/jpg") {
      echo ("Archivo invalido");
      return;
  }
  ```

### Limitar tamaño de archivos

Eso lo hacemos obteniendo el size del archivo (el cual esta en bytes), lo convertimos a kilobytes y comparamos con el limite que nosotros establezcamos

```php
# Convertimos a kb y comparamos el peso
if (($archivo["size"] / 1024) > 3 * 1024) {
    echo "El archivo superó el peso indicado";
    return;
}
```

## Cookies

En PHP, las cookies son pequeños archivos de texto que se utilizan para almacenar información en el lado del cliente, es decir, en el navegador web del usuario. Estas cookies se utilizan principalmente para recordar información específica sobre el usuario y permiten el seguimiento de su actividad en un sitio web.

Las cookies se crean en el servidor y se envían al navegador del usuario, donde se almacenan y se envían de vuelta al servidor en cada solicitud posterior. Esto permite que el servidor acceda a la información almacenada en las cookies y personalice la experiencia del usuario en función de dicha información.

A continuación, te explico los pasos básicos para trabajar con cookies en PHP:

Establecer una cookie: Para establecer una cookie en PHP, se utiliza la función setcookie(). Esta función requiere al menos dos parámetros: el nombre de la cookie y su valor. Aquí tienes un ejemplo:

```php
setcookie('nombre', 'Juan');
```

En este caso, se crea una cookie llamada 'nombre' con el valor 'Juan'. Por defecto, la cookie expirará al final de la sesión (cuando el navegador se cierre), pero puedes establecer opciones adicionales, como el tiempo de expiración, el path y el dominio, como parámetros adicionales en la función setcookie().

Obtener el valor de una cookie: Para acceder al valor de una cookie, puedes utilizar la superglobal $\_COOKIE. Aquí tienes un ejemplo:

```php
$nombre = $_COOKIE['nombre'];
echo "Hola, $nombre";
```

En este caso, se accede al valor de la cookie 'nombre' mediante $\_COOKIE['nombre'] y se imprime un mensaje de saludo utilizando ese valor.

Modificar una cookie: Para modificar una cookie existente, puedes simplemente establecerla nuevamente con el nuevo valor. Aquí tienes un ejemplo:

```php
setcookie('nombre', 'María');
```

En este caso, la cookie 'nombre' se actualiza con el nuevo valor 'María'.

Eliminar una cookie: Para eliminar una cookie, puedes establecerla nuevamente con un tiempo de expiración en el pasado. Aquí tienes un ejemplo:

```php
setcookie('nombre', '', time() - 3600);
```

En este caso, la cookie 'nombre' se establece con un tiempo de expiración en el pasado (una hora antes), lo que hace que el navegador la elimine.

Es importante tener en cuenta que las cookies tienen algunas limitaciones. Por ejemplo, tienen un tamaño máximo permitido y su contenido es visible y modificable por el usuario. Además, el usuario puede elegir bloquear o eliminar las cookies en su navegador. Por lo tanto, no se deben almacenar datos sensibles o confidenciales en las cookies sin tomar las precauciones adecuadas.

## CURSO de PHP desde CERO - 49 MANEJO de SESIONES en PHP con VARIABLES de $\_SESSION

En PHP, una sesión es una forma de mantener y almacenar datos del lado del servidor para un usuario específico durante un período de tiempo determinado. Las sesiones son utilizadas para realizar un seguimiento del estado de un usuario a medida que navega por un sitio web y permiten mantener la información almacenada de forma segura y accesible en múltiples páginas.

A continuación, te explico los conceptos básicos sobre el uso de sesiones en PHP:

Iniciar una sesión: Para iniciar una sesión en PHP, se utiliza la función session_start(). Esta función debe llamarse antes de cualquier salida o contenido enviado al navegador. Aquí tienes un ejemplo:

```php
session_start();
```

Al llamar a session_start(), se crea una sesión única para el usuario y se asigna un ID de sesión. Este ID se guarda en una cookie en el lado del cliente o se transmite a través de la URL si las cookies están desactivadas.

Almacenar datos en la sesión: Puedes almacenar datos en la sesión utilizando la superglobal $\_SESSION. Esta superglobal es un array asociativo donde puedes guardar y acceder a los datos de la sesión. Aquí tienes un ejemplo:

```php
$_SESSION['nombre'] = 'Juan';
$_SESSION['edad'] = 30;
```

En este caso, se almacena el nombre 'Juan' y la edad 30 en la sesión.

Obtener datos de la sesión: Para acceder a los datos almacenados en la sesión, simplemente accede a la superglobal $\_SESSION y utiliza los índices correspondientes. Aquí tienes un ejemplo:

```php
$nombre = $_SESSION['nombre'];
echo "Hola, $nombre";
```

En este caso, se obtiene el valor almacenado en la sesión para 'nombre' y se imprime un mensaje de saludo utilizando ese valor.

Destruir una sesión: Para finalizar una sesión y eliminar todos los datos almacenados en ella, puedes utilizar la función session_destroy(). Aquí tienes un ejemplo:

```php
session_destroy();
```

Al llamar a session_destroy(), se eliminan todos los datos de la sesión y se marca la sesión como finalizada. Sin embargo, la sesión actual no se destruye inmediatamente, sino que se destruirá en la siguiente carga de página.

Es importante tener en cuenta que PHP maneja las sesiones automáticamente y administra el almacenamiento de los datos de la sesión en el servidor. Además, PHP asigna automáticamente un ID de sesión único para cada usuario.

Las sesiones en PHP son muy útiles para mantener información del lado del servidor durante la interacción con un usuario, como datos de inicio de sesión, carritos de compra, preferencias del usuario, etc. Sin embargo, debes asegurarte de utilizar sesiones de manera segura y considerar aspectos como la protección contra ataques de sesión, la configuración adecuada de las opciones de sesión y el almacenamiento adecuado de los datos en la sesión.

## CURSO de PHP desde CERO - 51 REDIRECCIONAR paginas usando PHP (FUNCION HEADER) y JavaScript

Con PHP lo hacemos con

```php
header("Location: session.php");
```
