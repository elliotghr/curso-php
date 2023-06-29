<?php

class Prooductos_model
{
    // variable para almacenar la conexión
    private $db;
    // variable para almacenar los productos
    private $productos;

    // Definimos el constructor
    public function __construct()
    {
        // Incluimos el archivo de la conexión
        require_once "Conexion.php";

        // En el campo db almacenamos el método estatico conexion de la clase Conectar
        $this->db = Conectar::conexion();

        // Definimos un array vacio a nuestro campo productos
        $this->productos = array();
    }

    // Definimos el método get de los productos
    public function get_productos()
    {
        // generamos el query para obtener los productos
        $consulta = $this->db->query("SELECT * FROM productos");
        // Mientras pueda traer una fila de datos...
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            // Almacenamos esa fila en nuestro array
            $this->productos[] = $filas;
        }
        // Devolvemos el array con todos los productos
        return $this->productos;
    }
}
