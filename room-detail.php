<?php
session_start();
require_once('./setup.php');
require_once("db-config.php");
require_once('./utils/genericfn.php');

$formSent = false;

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["roomId"])) {
        $start = $_SESSION['availdatein'];
        $end = $_SESSION['availdateout'];
        $id = htmlspecialchars($_GET["roomId"]);
        $_SESSION['roomSessionId'] = $id;

        $sql = "SELECT * FROM room WHERE id = $id";
        $sqlRelatedRooms = "select * from room WHERE status = 'Available' AND discount = 0 AND id != $id ORDER BY RAND() LIMIT 2;";
    }
    $result = $conn->query($sql);
    $room = $result->fetch_assoc();
    if ($room['discount']) {
        $room['discountedPrice'] = intval($room['price'] - ($room['price'] * ($room['discount'] / 100)));
    } else {
        $room['discountedPrice'] = $room['price'];
    };


    $resultRelatedRoom = $conn->query($sqlRelatedRooms);
    $relatedRooms  = $resultRelatedRoom->fetch_all(MYSQLI_ASSOC);

    foreach ($relatedRooms as &$relatedRoom) {
        $relatedRoom['randomImage'] = getRandomImage();
        $relatedRoom['amenityImages'] = getAmenityImages();
    }

    echo $blade->run('room-detail', [
        'room' => $room,
        'relatedRooms' => $relatedRooms,
        'start' => $start,
        'end' => $end,
    ]);
} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["check-in"]) && isset($_POST["check-out"]) && isset($_POST["fullname"]) && isset($_POST["phone"]) && isset($_POST["message"])) {
        $fullname = htmlspecialchars($_POST["fullname"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $email = htmlspecialchars($_POST["email"]);
        $checkin = htmlspecialchars($_POST["check-in"]);
        $checkout = htmlspecialchars($_POST["check-out"]);
        $message = htmlspecialchars($_POST["message"]);
        $roomSessionId = $_SESSION['roomSessionId'];
        $sql = "INSERT INTO 
                booking (guest, phone_number, email, check_in, check_out, special_request, room_id)
				VALUES ('$fullname', '$phone', '$email', '$checkin', '$checkout', '$message', '$roomSessionId');";

        $stmt = $conn->prepare($sql);

        // $stmt->bind_param("ssssss", $fullname, $phone, $message, $roomSessionId);
        if ($stmt->execute()) {
            $formSent = '🎉 Your room has been booked.';
            $_SESSION['notification'] = ['message' => $formSent];
            header('Refresh: 1; "index.php"');
            echo $blade->run('index', [
                'notification' => $_SESSION['notification'] ?? null, 'error' => false
            ]);
            session_destroy();
        } else {
            $formSent = "Error: " . $stmt->error;
            $_SESSION['notification'] = ['message' => $formSent, 'error' => true];
        }
    }
}

$conn->close();
