<?php

include 'RecursoDidactico.php';
include 'EnumTema.php';

$recurso1 = new RecursoDidactico(
    'Introducción a PHP',
    Tema::PHP,
    'https://www.php.net/docs',
    TipoRecurso::ARCHIVO
);

echo $recurso1->obtenerInformacion();

?>