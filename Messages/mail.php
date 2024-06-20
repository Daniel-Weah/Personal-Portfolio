<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // collect form data
    $name = 
    htmlspecialchars($_POST['name']);

    $phone =
    htmlspecialchars($_POST['phone']);

    $email = 
    htmlspecialchars($_POST['email']);

    $message = 
    htmlspecialchars($_POST['message']);

    // Email details to be sent
    $to = "weahjrdanielk@gmail.com";

    $subject = "New Contact Form Submission from Portfolio";

    $body = "Name: $name\nPnone: $phone\nEmail: $email\n\nMessage: \n $message";

    $headers = "From: $email";

    // send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting me!"
    } else {
        echo "Sorry, something went wrong. Please try again later."
    }

}
?>