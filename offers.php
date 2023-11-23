<?php
require_once('./setup.php');
require_once("config.php");


$sql = "select * from room WHERE status = 'Available' AND discount > 0 limit 5";
$result = $conn->query($sql);


$rooms = $result->fetch_all(MYSQLI_ASSOC);

echo $blade->run('offers', ['rooms' => $rooms]);

$conn->close();
