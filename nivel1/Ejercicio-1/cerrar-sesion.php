<?php
session_start();

session_unset();

session_destroy();

// Redirigimos al formulario de registro
header("Location: formulario-registro.php");
exit();

?>