<?php
require_once('./setup.php');
require_once("config.php");


$sql = "SELECT * FROM room"; // Ejecutar una consulta y obtener los resultados
$result = $conn->query($sql);


$rooms = $result->fetch_all(MYSQLI_ASSOC);

echo $blade->run('index', ['rooms' => $rooms]);

$conn->close();
