<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $country = htmlspecialchars($_POST['country']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'ashwani@mgmevents.in'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $email_message = "Name: $name\nEmail: $email\nCountry: $country\nPhone: $phone\nMessage: $message";
    $headers = 'From: noreply@example.com' . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $email_message, $headers)) {
        header("Location: thankyou.php");
        exit();
    } else {
        echo "Form submission failed!";
    }
}
?>
