<?php
session_start();

// Aqui debo nombrarlas en ingles ya que al llamarlas en el codigo, esta mejor de vista
require_once "excepciones/EmptyFieldException.php";
require_once "excepciones/EmailException.php";
require_once "excepciones/NameException.php";
require_once "excepciones/PhoneException.php";

try {
    
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        throw new Exception("Acceso negado.");
    }

    // Recogemos los datos, la clave del array es el 'name' que pusiste en el HTML.
    $nombre_usuario = $_POST['nombre_usuario'];
    $correo_electronico = $_POST['correo_electronico'];
    $numero_de_telefono = $_POST['numero_de_telefono'];

    // Verificamos el campo vacio
    if (empty($nombre_usuario) || empty($correo_electronico) || empty($numero_de_telefono)) {
        throw new EmptyFieldException( "Todos los campos son requeridos.");
    }
    
    // verificamos caracteres especiales
    if (!preg_match("/^[\p{L}' -]+$/u", $nombre_usuario)) {
        throw new NameException("No puedes ingresar caracteres especiales");
    }

    // Email valido
    if(!filter_var($correo_electronico, FILTER_VALIDATE_EMAIL)) {
        throw new EmailException("Correo electronico invalido");
    }

    // Que el telefono sea un numero
    if(!is_numeric($numero_de_telefono)) {
        throw new PhoneException ("Debes ingresar numeros");
    }

    // Si la validacion salió bien, aqui se guaardan los datos
    $_SESSION['nombre_usuario'] = $nombre_usuario;
    $_SESSION['correo_electronico'] = $correo_electronico;
    $_SESSION['numero_de_telefono'] = $numero_de_telefono;
    $_SESSION['mensaje_registro_existoso'] = "$nombre_usuario, tu ingreso fue exitoso!.";

    echo "<p>Los datos se han guardado con exito!</p>";
    echo "<a href='informacion-usuario.php'>Ver mi perfil</a>";


} catch (EmptyFieldException $e) {
    $_SESSION['error'] = $e->getMessage();
    header("Location: formulario-registro.html");
    exit;

} catch (NameException $e) {
    $_SESSION['error'] = $e->getMessage();
    header("Location: formulario-registro.html");
    exit;

} catch (PhoneException $e) {
    $_SESSION['error'] = $e->getMessage();
    header("Location: formulario-registro.html");
    exit;

} catch (EmailException $e) {
    $_SESSION['error'] = $e->getMessage();
    header("Location: formulario-registro.html");
    exit;
}
    
?>