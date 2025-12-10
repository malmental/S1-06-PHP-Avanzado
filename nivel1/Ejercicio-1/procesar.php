<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // La clave del array es el 'name' que pusiste en el HTML.
    $nombre_usuario = $_POST['nombre_usuario'];
    $correo_electronico = $_POST['correo_electronico'];
    $numero_de_telefono = $_POST['numero_de_telefono'];

    // Paso 3: mostramos los valores en pantalla
    echo "<h1>Datos recibidos</h1>";
    echo "<p>Nombre de usuario: " . $nombre_usuario . "</p>";
    echo "<p>Correo electronico: " . $correo_electronico . "</p>";
    echo "<p>Numero de telefono: " . $numero_de_telefono . "</p>";
 
    $_SESSION['usuario'] = [
        'nombre' => $nombre,
        'email' => $email,
        'ciudad' => $ciudad
    ];

    // Podriamos agregar un mensaje de confirmacion de registro
    $_SESSION['mensaje_registro_existoso'] = "Genial! $nombre_de_usuario!, tu registro fue exitoso!.";

    echo "<p>Los datos se han guardado con exito!</p>";
    echo "<a href='informacion-usuario.php'>Ver mi perfil</a>";


} else {

    echo "<p>Error, debe rellenar todos los campos.</p>";
    echo "<a href='ejercicio-1-formulario.html'>Volver al formulario</a>";
}

?>