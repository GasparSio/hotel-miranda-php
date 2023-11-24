<?php
require_once('./setup.php');
require_once("db-config.php");


$sql = "select * from room WHERE status = 'Available' AND discount > 0 limit 5";
$result = $conn->query($sql);


$rooms = $result->fetch_all(MYSQLI_ASSOC);

foreach ($rooms as &$room) {
    $room['discountedPrice'] = intval($room['price'] - ($room['price'] * ($room['discount'] / 100)));
}

echo $blade->run('offers', ['rooms' => $rooms]);

$conn->close();
