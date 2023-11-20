<?php
require_once('./setup.php');
require_once("config.php");


$sql = "select * from room WHERE offer_price != 0 AND discount > 0 limit 8";
$result = $conn->query($sql);


$rooms = $result->fetch_all(MYSQLI_ASSOC);

echo $blade->run('offers', ['rooms' => $rooms]);

$conn->close();
