<?php
require_once('./setup.php');
require_once("config.php");

if (isset($_GET["roomId"])) {
    $roomId = htmlspecialchars($_GET["roomId"]);
    // Utiliza parámetros preparados para evitar SQL injection
    $sql = "SELECT * FROM room WHERE id = $roomId";
}


$result = $conn->query($sql);

$rooms = $result->fetch_assoc();

echo $blade->run('room-detail', ['room' => $rooms]);

$conn->close();
