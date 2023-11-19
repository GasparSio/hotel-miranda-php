<?php
require __DIR__ . '../../../vendor/autoload.php';

$servername = $_ENV['SERVERNAME'];
$username = $_ENV['USERNAME'];
$password = $_ENV['PASSWORD'];
$database = $_ENV['DATABASE'];

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $setnames = $conn->prepare("SELECT * from user");
// $setnames->execute();

echo "Connected successfully \n";


// Ejecutar una consulta y obtener los resultados
$result = $conn->query("SELECT * FROM user");

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Recorrer los resultados y mostrar la información
    while ($row = $result->fetch_assoc()) {
        echo "NAME: " . $row["full_name"] . "\n";
    }
} else {
    echo "No se encontraron resultados.";
}
