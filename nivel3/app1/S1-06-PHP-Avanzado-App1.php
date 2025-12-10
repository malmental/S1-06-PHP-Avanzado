<?php

require __DIR__ . 'nivel3/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('ejemplo');
$logger->pushHandler(new StreamHandler('log.log', Logger::WARNING));

$logger->info('Este es un mensaje de información');
$logger->notice('Este es un mensaje de advertencia');
$logger->warning('Este es un mensaje de alerta');
$logger->error('Este es un mensaje de error');
$logger->critical('Este es un mensaje de crítica');

?>