<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // Email details
    $to = "weahjrdanielk@gmail.com"; // Recipient email address
    $subject = "New Contact Form Submission from Portfolio";

    // Construct the email body
    $body = "Name: $name\nPhone: $phone\nEmail: $email\n\nMessage:\n$message";

    // Set headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting me!";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
