<?php
require 'lib/BladeOne.php';
use eftec\bladeone\BladeOne;
$views = 'views'; // Specify the directory where your Blade templates are located.
$compiledFolder = 'cache'; // Specify the directory where compiled views will be stored.
$blade = new BladeOne($views, $compiledFolder, BladeOne::MODE_AUTO);
// Example usage
echo $blade->run('index');

