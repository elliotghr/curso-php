<?php

// importamos la clase del modelo
require_once "model/Usuarios_model.php";

// generamos una instancia de nuestro modelo
$usuario = new Usuarios_model();

// El array obtenido lo guardamos en $matriz_usuarios
$matriz_usuarios = $usuario->get_usuarios();


require_once "view/usuarios.php";
