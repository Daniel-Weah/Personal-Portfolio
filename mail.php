if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "weahjrdanielk@gmail.com";
        $subject = "New Contact Form Submission from Portfolio";
        $body = "Name: $name\nPhone: $phone\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you for contacting me!";
        } else {
            echo "Sorry, something went wrong. Please try again later.";
        }
    } else {
        echo "Invalid email address.";
    }
}
