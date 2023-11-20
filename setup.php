<?php
require_once __DIR__ . '/vendor/autoload.php';
Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/')->load();
//Importo las plantillas
require_once('lib/BladeOne.php');

use eftec\bladeone\BladeOne;

$views = 'views'; // Directorio donde se encuentran tus plantillas Blade.
$compiledFolder = 'cache'; // Directorio donde se almacenarán las vistas compiladas.

$blade = new BladeOne($views, $compiledFolder, BladeOne::MODE_AUTO);
