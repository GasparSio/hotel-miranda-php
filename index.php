<?php
require 'lib/BladeOne.php';

use eftec\bladeone\BladeOne;

$views = 'views'; // Directorio donde se encuentran tus plantillas Blade.
$compiledFolder = 'cache'; // Directorio donde se almacenarán las vistas compiladas.

$blade = new BladeOne($views, $compiledFolder, BladeOne::MODE_AUTO);

// Pasar datos a la vista si es necesario
$data = [
    'title' => 'Home',
];

// Renderiza la vista principal (index.blade.php)
echo $blade->run('index', $data);
