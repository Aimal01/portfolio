<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "iaimalkhan385@gmail.com"; // Replace with your email address
    $subject = "New message from your website";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message successfully sent";
    } else {
        echo "Message delivery failed";
    }
} else {
    echo "Invalid request";
}
?>
