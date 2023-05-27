<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <h1>Hi</h1>
  <?php
  echo "hola mundo" . '<br>';
  ## Tipos de datos

  echo TRUE . '<br>';
  echo FALSE . '<br>';
  echo "10" . '<br>';
  echo "Cadena de texto" . '<br>';

  ## Variables
  $nombre_nano = "Nano";
  echo "Hola, mi nombre es $nombre_nano" . '<br>';

  ## Constante
  const PI2 = 3.1416;
  echo PI2 . '<br>';
  const ARRAYNUMBER = array(1, 2, 3, 4, 5);
  echo ARRAYNUMBER[2] . '<br>';

  ## Arrays
  $new_array = array(1, 2, 3, 4);
  echo $new_array[3] . '<br>';

  $new_array_numbers = ["Hola", 2, "Mundo", 4];
  echo $new_array_numbers[2] . '<br>';
  $new_array[4] = "jelou";
  echo $new_array[4] . '<br>';

  $tutor = ["nombre" => "Elliot", "apellido" => "Gandarilla"];
  echo $tutor["nombre"] . '<br>';

  $tutor_2 = ["nombre" => "Elliot", "apellido" => "Gandarilla", "mascotas" => ["Nano", "Mosho", "Cricri", "Pelu"]];
  echo $tutor_2["mascotas"][0] . '<br>';

  echo count($tutor_2) . '<br>';
  echo count($tutor_2, COUNT_RECURSIVE) . '<br>';

  ## Concatenacion
  $nombre = "Elliot";
  $apellido = "Gandarilla";
  $edad = "26";

  echo $nombre . $apellido . $edad . '<br>';

  ## Interpolacion
  $nombre = "Elliot";
  $apellido = "Gandarilla";
  $edad = "26";

  echo "Mi nombre es $nombre $apellido y tengo $edad años" . '<br>';

  ## if
  $edad = 20;

  if ($edad >= 18) {
    echo "Puedes pasar" . '<br>';
  } else {
    echo "No puedes pasar" . '<br>';
  }

  $camisas = 3;
  $precio = 100 * $camisas;

  $res = $camisas > 2 ?
    "Su compra de $camisas camisas es de " . $precio * .8 :
    "Su compra de $camisas camisas es de " . $precio * .9;

  echo $res . '<br>';
  echo "<br>" . '<br>';

  $a = 11;
  while ($a < 11) {
    echo $a * 9 . '<br>';
    echo "<br>" . '<br>';
    $a++;
  }
  do {
    echo $a * 9 . '<br>';
    echo "<br>" . '<br>';
    $a++;
  } while ($a <= 10);

  $array = [2, 4, 6, 8, 10];
  for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . '<br>';
  }
  echo "<br>" . '<br>';
  echo "<br>" . '<br>';

  foreach ($array as $key => $value) {
    if ($value === 4) {
      continue;
    }
    echo 'key: ' . $key . '<br>';
    echo "<br>" . '<br>';
    echo 'value: ' . $value . '<br>';
    echo "<br>" . '<br>';
  }

  # Funciones

  function suma($a, $b = 10)
  {
    return $a + $b;
  }

  echo suma(2) . '<br>';
  echo "<br>" . '<br>';

  include("funciones.php");

  echo resta(4) . '<br>';
  echo "<br>" . '<br>';

  # 

  $cadena = "Hola mundo";

  echo strtolower($cadena) . '<br>';
  echo "<br>" . '<br>';
  echo strtoupper($cadena) . '<br>';
  echo "<br>" . '<br>';
  echo ucwords($cadena) . '<br>';
  echo "<br>" . '<br>';
  echo str_replace("mundo", "world", $cadena) . '<br>';
  echo "<br>" . '<br>';

  echo strlen($cadena) . '<br>';
  echo "<br>" . '<br>';
  echo str_word_count($cadena) . '<br>';
  echo "<br>" . '<br>';

  var_dump(explode(' ', $cadena));

  $cantidad_1 = 16354.12;

  $cantidad_2 = number_format($cantidad_1, 2, ".", ",");

  # DATE

  date_default_timezone_set("America/Mexico_City");

  echo "<br>" . '<br>';
  echo date("d-m-y") . '<br>';
  echo "<br>" . '<br>';
  echo date("Y/m/d") . '<br>';
  echo "<br>" . '<br>';
  echo date("l") . '<br>';
  echo "<br>" . '<br>';

  # HASH

  // foreach (hash_algos() as $key => $value) {
  //   echo $value . "<br>" . '<br>';
  // }

  $clave = "HolaMundo1234";
  $clave_procesada = password_hash($clave, PASSWORD_BCRYPT, ["cost" => 11]);

  echo $clave_procesad . '<br>';
  ?>

</body>

</html>