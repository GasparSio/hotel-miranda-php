<?php
require_once('./setup.php');
require_once("db-config.php");
require_once('./utils/genericfn.php');

$sql = "select * from room WHERE status = 'Available' AND discount > 0 limit 5";
$result = $conn->query($sql);


$rooms = $result->fetch_all(MYSQLI_ASSOC);

foreach ($rooms as &$room) {
    $room['discountedPrice'] = intval($room['price'] - ($room['price'] * ($room['discount'] / 100)));
}

foreach ($rooms as &$room) {
    $room['randomImage'] = getRandomImage();
    $room['amenityImages'] = getAmenityImages();
    $room['amenitiesData'] = getAmenitiesData($amenitiesData);
}

echo $blade->run('offers', [
    'rooms' => $rooms
]);

$conn->close();
