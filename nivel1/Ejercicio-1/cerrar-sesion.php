<?php

session_unset();

session_destroy();

// Redirigimos al formulario de registro
header("Location: formulario-registro.html");
exit();
