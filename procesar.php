<head>
    <link rel="stylesheet" href="estilo.css">
</head>

<?php

// Este es el archivo que recibe y procesa los datos
// Iniciar la sesión SIEMPRE debe ir al principio del documento, antes de cualquier HTML o salida:
session_start();

// Paso 1: Verificar si el formulario fue enviado por método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Paso 2: Recibir los datos usando la variabl superglobal $_POST
    // $_POST es un Array asociativo que contiene los datos enviados por un formulario con method="post"
    // La clave del array es el 'name' que pusiste en el HTML.
    $nombre = $_POST['nombre_usuario'];
    $email = $_POST['email_usuario'];
    $ciudad = $_POST['ciudad_usuario'];
    $biografia = $_POST['biografia_usuario'];

    // Paso 3: mostramos los valores en pantalla
    echo "<h1>Datos recibidos</h1>";
    echo "<p>Nombre de usuario: " . htmlspecialchars($nombre) . "</p>";
    echo "<p>Correo electronico: " . htmlspecialchars($email) . "</p>";
    echo "<p>Ciudad favorita: " . htmlspecialchars($ciudad) . "</p>";
    echo "<p>Se describe: " . htmlspecialchars($biografia) . "</p>";

    // SEGURIDAD: Usamos htmlspecialchars() para mostrar los datos.
    // Esto convierte caracteres especiales como < o > en sus entidades HTML (&lt;, &gt;), evitando que un usuario incruste codigo malicioso en el campo del formulario

    // Paso 4: Registrar los valores en las variables de la sesion, $_SESSION es una variable superglobal. Su valor se mantiene aunque el usuario cambie de pagina, es lo ideal para mantener al usuario 'logeado' y guardas sus preferencias
    $_SESSION['usuario'] = [
        'nombre' => $nombre,
        'email' => $email,
        'ciudad' => $ciudad
    ];

    // Podriamos agregar un mensaje de confirmacion de registro
    $_SESSION['mensaje_registro_existoso'] = "Genial! $nombre!, tu registro fue exitoso!.";

    echo "<p>Los datos se han guardado con exito!</p>";
    echo "<a href='perfil.php'>Ver mi perfil</a>";
} else {

    // Convengamos alguien intentando entrar (a procesar.php) sin rellenar todos los datos 
    echo "<p>Error, debe rellenar todos los campos.</p>";
    echo "<a href='ejercicio-1-formulario.html'>Volver al formulario</a>";
}

?>