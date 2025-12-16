<?php 
session_start();

if (!empty($_GET["Nombre"]) && ($_GET["Apellido"]) && ($_GET["Edad"]))
{
    $nombre = $_GET ["Nombre"];
    $apellido = $_GET ["Apellido"];
    $edad = $_GET ["Edad"];

    $_SESSION ["Nombre"] = $nombre;
    $_SESSION ["Apellido"] = $apellido;
    $_SESSION ["Edad"] = $edad;

    echo "Usuario $nombre, su apellido es $apellido y tiene $edad años" . PHP_EOL;
}

