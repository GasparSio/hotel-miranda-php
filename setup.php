<?php
require_once __DIR__ . '/vendor/autoload.php';
Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/')->load();
//Importo las plantillas

use eftec\bladeone\BladeOne;

$blade = new BladeOne();
