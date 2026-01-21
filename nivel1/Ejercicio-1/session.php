<?php 
session_start();

if (!empty($_POST["Nombre"]) && !empty($_POST["Apellido"]) && !empty($_POST["Edad"]))
{
    $nombre = $_GET ["Nombre"];
    $apellido = $_GET ["Apellido"];
    $edad = $_GET ["Edad"];

    $_SESSION ["Nombre"] = $nombre;
    $_SESSION ["Apellido"] = $apellido;
    $_SESSION ["Edad"] = $edad;

    echo "Usuario $nombre, su apellido es $apellido y tiene $edad años" . PHP_EOL;
    
} else {
    echo "Los campos no pueden estar vacios";
}

