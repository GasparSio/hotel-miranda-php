<?php
require_once('./setup.php');
require_once("config.php");

$successForm = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $fullName = htmlspecialchars($_POST["input1"]);
    $phoneNumber = htmlspecialchars($_POST["input2"]);
    $email = htmlspecialchars($_POST["input3"]);
    $subjectOfReview = htmlspecialchars($_POST["input4"]);
    $reviewBody = htmlspecialchars($_POST["input5"]);

    // Preparar la consulta SQL
    $sql = "INSERT INTO contact (full_name, email, phone_number, subject_of_review, review_body, dateTime, status) VALUES (?, ?, ?, ?, ?, CURDATE(), 'Not Archived')";

    // Preparar la declaración
    $stmt = $conn->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("sssss", $fullName, $email, $phoneNumber, $subjectOfReview, $reviewBody);

    // Ejecutar la declaración
    if ($stmt->execute()) {
        // Éxito en la inserción
        $successForm = true;
    } else {
        // Error en la inserción
        $successForm = "Error: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
}
// Cerrar la conexión (si no se ha cerrado ya)

echo $blade->run('contact', ['successForm' => $successForm]);
$conn->close();
