<?php

if ($_POST["nombre"] == "elliot" && $_POST["pass"] == 123) {
    session_name("LOGIN");
    session_start();

    $_SESSION["nombre"] = "elliot";
    $_SESSION["edad"] = "26";
    $_SESSION["pais"] = "México";
    header("Location: session.php");
} else {
    echo "Datos incorrectos";
}
