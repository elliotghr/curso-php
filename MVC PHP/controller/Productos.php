<?php

// importamos la clase del modelo
require_once "model/Productos_model.php";

// generamos una instancia de nuestro modelo
$producto = new Prooductos_model();

// El array obtenido lo guardamos en $matriz_productos
$matriz_productos = $producto->get_productos();


require_once "view/productos.php";
