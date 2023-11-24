<?php
require_once('./setup.php');
require_once("db-config.php");
require_once('./utils/genericfn.php');

$sql = "SELECT * FROM room";
$result = $conn->query($sql);


$rooms = $result->fetch_all(MYSQLI_ASSOC);
foreach ($rooms as &$room) {
    $room['randomImage'] = getRandomImage();
    $room['amenityImages'] = getAmenityImages();
}
echo $blade->run('index', [
    'rooms' => $rooms,
]);

$conn->close();
