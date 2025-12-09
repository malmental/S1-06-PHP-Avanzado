<?php

// esta pagina mostrará que los datos se guardaron correctamente y que estan disponibles en la web creada
// Se inicia sesion para poder acceder a $_SESSION
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion de usuario</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="form-container">
        <?php
        
        //Comprobaos que el usuario este logeado, que la sesion usuario existe
        if (isset($_SESSION['usuario'])) {
            // Si existe, mostraremos sus datos
            echo "<h1>Bienvenido </h1>" . htmlspecialchars($_SESSION['usuario']['nombre']) . "</h1>";
            echo "<p>Email: " . htmlspecialchars($_SESSION['usuario']['email']) . "</p>";
            echo "<p>A donde desea viajar: " . htmlspecialchars($_SESSION['usuario']['ciudad']) . "</p>";
            
            if (isset($_SESSION['mensaje_registro_existoso'])) {
                echo "<p style='color: green;'>" . $_SESSION['mensaje_exito'] . "</p>";
                // Borramos el mensaje para que no se muestre de nuevo si refresca la página
                unset($_SESSION['mensaje_exito']);
            }
        } else {
            // Si no hay datos en la sesion, redirigimos el formulario
            echo "<h1>Acceso negado</h1>";
            echo "<p>Sesion no iniciada, porfavor registrate</p>";
            echo "<a href='formulario.php'>Ir al formulario</a>";
        }
        
        ?>
        <hr>
        <a href="cerrar-sesion.php">Cerrar sesion</a>
    </div>
</body>
</html>