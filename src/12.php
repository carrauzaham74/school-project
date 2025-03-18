<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (isset($_POST['submit'])) {
    $to = 'your_email@example.com';
    $subject = 'Contact Form Submission';
    $message = "Name: $name\nEmail: $email\nMessage:\n$message";
    mail($to, $subject, $message);
}
?>