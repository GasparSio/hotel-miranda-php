<?php
require_once('./setup.php');

// Pasar datos a la vista si es necesario
$data = [
    'title' => 'About Us',
];

// Renderiza la vista principal (index.blade.php)
echo $blade->run('about', $data);
