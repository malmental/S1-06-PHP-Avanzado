<?php

// Cerramos sesion como buena practica
// Destruimos todas las variables de sesion
session_unset();

// Destrumos la sesion en si
session_destroy();

// Redirigimos al formulario de registro
header("Location: formulario.html");
exit();
