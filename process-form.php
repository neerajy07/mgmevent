<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $package = $_POST['package'];

    $to = 'ashwani@mgmevents.in';
    $subject = 'New Event Booking';
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nPackage: $package";
    $headers = 'From: noreply@example.com' . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        header("Location: thankyou.php");
        exit();
    } else {
        echo "Form submission failed!";
    }
}
?>
