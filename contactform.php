<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Basic spam protection: Check if the form fields are not empty
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['contact']) || empty($_POST['message'])) {
        // Handle empty fields
        echo "Please fill in all required fields.";
        exit;
    }

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $subject = isset($_POST['subject']) ? $_POST['subject'] : 'No Subject';
    $message = $_POST['message'];

    // Construct email message
    $to = "info@webbizualtech.in";
    $subject = "New Message from Contact Form: $subject";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Contact: $contact\n";
    $body .= "Message: \n$message";

    // Send email
    $headers = "From: $email";
    if (mail($to, $subject, $body, $headers)) {
        echo '<script>alert("Message sent successfully.");</script>';
        // Redirect to homepage
        echo '<script>window.location.replace("/index.html");</script>';
    } else {
        echo '<script>alert("Failed to send message. Please try again later.");</script>';
    }
} else {
    // Redirect if accessed directly
    header("Location: /index.html"); // Redirect to homepage or appropriate page
}
?>
