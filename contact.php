<?php
session_start();
require_once('./setup.php');
require_once("db-config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["contactName"]) && !empty($_POST["contactPhone"]) && !empty($_POST["contactEmail"]) && !empty($_POST["contactSubject"]) && !empty($_POST["contactMessage"])) {
        $fullName = htmlspecialchars($_POST["contactName"]);
        $phoneNumber = htmlspecialchars($_POST["contactPhone"]);
        $email = htmlspecialchars($_POST["contactEmail"]);
        $subjectOfReview = htmlspecialchars($_POST["contactSubject"]);
        $reviewBody = htmlspecialchars($_POST["contactMessage"]);

        $sql = "INSERT INTO contact (full_name, email, phone_number, subject_of_review, review_body) VALUES (?, ?, ?, ?, ?)";

        // Preparar la declaración
        $stmt = $conn->prepare($sql);

        // Vincular parámetros
        $stmt->bind_param("sssss", $fullName, $email, $phoneNumber, $subjectOfReview, $reviewBody);

        // Ejecutar la declaración
        if ($stmt->execute()) {
            $formSent = 'Form Sent';
            $_SESSION['notification'] = ['message' => $formSent];
            echo $blade->run('contact', ['notification' => $_SESSION['notification'] ?? null, 'error' => false]);
        } else {
            $formSent = "Error: " . $stmt->error;
            $_SESSION['notification'] = ['message' => $formSent, 'error' => true];
        }
        // Cerrar la conexión
        $stmt->close();
    } else {
        $formSent = 'Form fields are empty';
        $_SESSION['notification'] = ['message' => $formSent];
        echo $blade->run('contact', ['notification' => $_SESSION['notification'], 'error' => true]);
    }
}
if (empty($_SESSION['notification'])) {
    echo $blade->run('contact');
}

$conn->close();
session_destroy();
