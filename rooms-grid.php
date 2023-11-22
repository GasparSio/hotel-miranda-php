<?php
require_once('./setup.php');
require_once("config.php");







if (isset($_GET["availdatein"]) && isset($_GET["availdateout"])) {
    $checkin = htmlspecialchars($_GET["availdatein"]);
    $checkout = htmlspecialchars($_GET["availdateout"]);
    $sql =
        "SELECT r.*
            FROM room r
            WHERE r.status = 'Available'
            AND NOT EXISTS (
                SELECT 1
                FROM booking b
                WHERE r.id = b.room_id
                AND (
                    ('$checkin' BETWEEN b.check_in AND b.check_out)
                    OR ('$checkout' BETWEEN b.check_in AND b.check_out)
                    OR (b.check_in BETWEEN '$checkin' AND '$checkout')
                    OR (b.check_out BETWEEN '$checkin' AND '$checkout')
                )
            );";
} else {
    $sql = "SELECT * FROM room WHERE status = 'Available'";
}

$result = $conn->query($sql);
$rooms = $result->fetch_all(MYSQLI_ASSOC);
echo $blade->run('rooms-grid', ['rooms' => $rooms]);

$conn->close();
