<?php

require __DIR__ . '/../vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create('es_ES');

$nombre = $faker->name;
$apellidos = $faker->lastName;
$email = $faker->email;
$telefono = $faker->phoneNumber;

echo "Nombre: $nombre" . PHP_EOL;
echo "Apellidos: $apellidos" . PHP_EOL;
echo "Email: $email" . PHP_EOL;
echo "Telefono: $telefono" . PHP_EOL;

file_put_contents(
    'datos.txt',
    $faker->name . PHP_EOL .
        $faker->lastName . PHP_EOL .
        $faker->email . PHP_EOL .
        $faker->phoneNumber
);

?>
