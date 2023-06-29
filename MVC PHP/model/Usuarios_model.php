<?php

class Usuarios_model
{
    // variable para almacenar la conexión
    private $db;
    // variable para almacenar los usuarios
    private $usuarios;

    // Definimos el constructor
    public function __construct()
    {
        // Incluimos el archivo de la conexión
        require_once "Conexion.php";

        // En el campo db almacenamos el método estatico conexion de la clase Conectar
        $this->db = Conectar::conexion();

        // Definimos un array vacio a nuestro campo usuarios
        $this->usuarios = array();
    }

    // Definimos el método get de los usuarios
    public function get_usuarios()
    {
        // generamos el query para obtener los usuarios
        $consulta = $this->db->query("SELECT * FROM usuarios");
        // Mientras pueda traer una fila de datos...
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            // Almacenamos esa fila en nuestro array
            $this->usuarios[] = $filas;
        }
        // Devolvemos el array con todos los usuarios
        return $this->usuarios;
    }
}
