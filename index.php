<?php
require_once('./setup.php');
require_once("config.php");


$sql = "SELECT id, room_number FROM room"; // Ejecutar una consulta y obtener los resultados
$result = $conn->query($sql);


$data = $result->fetch_all(MYSQLI_ASSOC);

echo $blade->run('index', ['data' => $data]);

$conn->close();
