<?php

class Conectar
{
    // Creamos un método estatico para acceder por medio de la clase
    public static function conexion()
    {
        try {
            // Es ideal tener un arhivo config con los valores de cada uno de los parametros del PDO
            $conexion = new PDO("mysql:host=localhost;dbname=inventario", 'root', 'root');

            // Configuramos el manejo de excpeciones y errores para facilitar el manejo y la detección de problemas en la comunicación con la base de datos
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // $conexion->exec("SER CHARACTER SET UTF8");
        } catch (\Throwable $th) {
            // Si al falla detenemos el script e imprimimos los mensajes de error y lineas de error
            die('Error' . $th->getMessage());
            echo  "Linea del error" . $th->getLine();
        }

        return $conexion;
    }
}
