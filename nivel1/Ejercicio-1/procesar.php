<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre = filter_var($_POST[NOMBRE], FILTER_VALIDATE_REGEXP, ["regexp" => "/^[a-zA-Z\s]+$/"]);
    $email = filter_var($_POST[EMAIL], FILTER_VALIDATE_EMAIL);
    $telefono = filter_var($_POST[TELEFONO], FILTER_VALIDATE_INT);

    if ($nombre && $email && $telefono) {
        $_SESSION[NOMBRE] = $nombre;
        $_SESSION[EMAIL] = $email;
        $_SESSION[TELEFONO] = $telefono;

        echo "Los datos son: " . "<br>";
        echo "El nombre de usuario es: " . $nombre . "<br>";
        echo "Su email es: " . $email . PHP_EOL;
        echo "Y su telefono es: " . $telefono . "<br>";

        // Registramos los valores
        $_SESSION['usuario'] = [
            'nombre' => $nombre;
            'email' => $email;
            'telefono' => $telefono;
        ];

    } else {
        echo "Los campos no pueden estar vacíos.";
        echo "<a href='ejercicio-1-formulario.html'>Volver al formulario</a>";
    }
}

// Se muestran los datos para confirmar que se enviaron correctamente
echo $_SESSION ['Nombre'] . "<br>";
echo $_SESSION ['Email'] . "<br>";
echo $_SESSION ['Telefono'] . "<br>";

?>