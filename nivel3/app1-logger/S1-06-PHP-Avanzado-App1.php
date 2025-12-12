<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('ejemplo');
$logger->pushHandler(new StreamHandler('log.log', Logger::WARNING));

$logger->info('Información');
$logger->notice('Notificacion');
$logger->warning('Peligro');
$logger->error('Error');
$logger->critical('Critico');

?>