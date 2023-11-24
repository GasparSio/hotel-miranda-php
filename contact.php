<?php
session_start();
require_once('./setup.php');
require_once("db-config.php");

$formSent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
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
    } else {
        $formSent = "Error: " . $stmt->error;
        $_SESSION['notification'] = ['message' => $formSent, 'error' => true];
    }
    // Cerrar la conexión
    $stmt->close();
}

echo $blade->run('contact', ['notification' => $_SESSION['notification'] ?? null, 'error' => false]);
$_SESSION['notification'] = null;

$conn->close();
session_destroy();
