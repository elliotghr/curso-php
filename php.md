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
