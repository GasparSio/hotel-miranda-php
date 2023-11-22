<?php
session_start();
require_once('./setup.php');
require_once("config.php");

$formSent = false;


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["roomId"])) {
        $start = $_SESSION['availdatein'];
        $end = $_SESSION['availdateout'];
        $id = htmlspecialchars($_GET["roomId"]);
        $_SESSION['roomSessionId'] = $id;
        $sql = "SELECT * FROM room WHERE id = $id";
    }
    $result = $conn->query($sql);
    $rooms = $result->fetch_assoc();
    echo $blade->run('room-detail', ['room' => $rooms, 'start' => $start, 'end' => $end]);
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
                booking (guest, phone_number, email, order_date, check_in, check_out, special_request, status, room_id)
				VALUES ('$fullname', '$phone', '$email', CURDATE(), '$checkin', '$checkout', '$message', 'Check In', '$roomSessionId');";

        $stmt = $conn->prepare($sql);

        // $stmt->bind_param("ssssss", $fullname, $phone, $message, $roomSessionId);
        if ($stmt->execute()) {
            echo $blade->run('index');
            session_destroy();
        } else {
            echo 'error';
        }
    }
}

$conn->close();
