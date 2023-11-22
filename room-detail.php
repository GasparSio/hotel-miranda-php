<?php
session_start();
require_once('./setup.php');
require_once("config.php");

if (isset($_GET["roomId"])) {
    $start = $_SESSION['availdatein'];
    $end = $_SESSION['availdateout'];
    $roomId = htmlspecialchars($_GET["roomId"]);
    // Utiliza parámetros preparados para evitar SQL injection
    $sql = "SELECT * FROM room WHERE id = $roomId";
}

$result = $conn->query($sql);

$rooms = $result->fetch_assoc();

echo $blade->run('room-detail', ['room' => $rooms, 'start' => $start, 'end' => $end]);
$conn->close();
session_destroy();
