<?php

include 'Automovil.php';
include 'Turbo.php';

$automovil1 = new Automovil(
    'Toyota',
    'ABC666',
    'Gasolina',
    220
);

$automovil1->getDatos();

?>