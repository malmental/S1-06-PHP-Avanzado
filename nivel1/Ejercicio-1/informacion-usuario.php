<?php 
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion de usuario</title>
</head>

<body>

    <?php

    if (isset($_SESSION['usuario'])) {

        echo "<h1>Bienvenido </h1>" . ($_SESSION['nombre_usuario']) . "</h1>";
        echo "<p>Email: " . ($_SESSION['correo_electronico']) . "</p>";
        echo "<p>Tu telefono: " . ($_SESSION['numero_de_telefono']) . "</p>";

    } else {
        echo "<h1>Acceso negado</h1>";
        echo "<p>Sesion no iniciada, porfavor registrate</p>";
        echo "<a href='formulario.php'>Ir al formulario</a>";
    }
    ?>
    
    <br><br>
    <a href="cerrar-sesion.php">Cerrar sesion</a>
</body>

</html>