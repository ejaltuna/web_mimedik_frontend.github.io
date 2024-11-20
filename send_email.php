<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validar los datos (puedes añadir más validaciones según sea necesario)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Por favor completa todos los campos requeridos.";
        exit;
    }

    // Configuración del correo
    $to = "altuna90@gmail.com"; // Cambia esto por tu dirección de correo
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8" . "\r\n";

    // Contenido del mensaje
    $email_subject = "Nuevo mensaje de contacto: $subject";
    $email_body = "Nombre: $name\n";
    $email_body .= "Correo: $email\n";
    $email_body .= "Teléfono: $phone\n";
    $email_body .= "Mensaje:\n$message\n";

    // Enviar el correo
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje. Por favor intenta nuevamente más tarde.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>