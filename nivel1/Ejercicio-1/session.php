<?php
session_start();

// Haremos una condicional inicial para asegurar que los campos no se envien vacios.
if (!empty($_GET['Nombre']) && !empty($_GET['Email']) && !empty($_GET['Telefono'])){

$nombre = $_GET ['Nombre'];
$email = $_GET['Email'];
$telefono = $_GET['Telefono'];

$_SESSION ['Nombre'] = $nombre;
$_SESSION ['Email'] = $email;
$_SESSION ['Telefono'] = $telefono;

echo "El nombre de usuario es: " . $nombre . "<br>";
echo "Su email es: " . $email . PHP_EOL;
echo "Y su telefono es: " . $telefono . "<br>";

} else {
    echo "Los campos no pueden estar vacios.";
}

// Se muestran los datos para confirmar que se enviaron correctamente
echo $_SESSION ['Nombre'] . "<br>";
echo $_SESSION ['Email'] . "<br>";
echo $_SESSION ['Telefono'] . "<br>";

?>