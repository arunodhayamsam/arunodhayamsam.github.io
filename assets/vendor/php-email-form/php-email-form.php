<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient_email = 'arunodhayam.sam@tridentsqa.com';
    $sender_name = $_POST['name'];
    $sender_email = $_POST['email'];
    $message = $_POST['message'];

    $subject = "New Contact Form Submission from $sender_name";

    // You can use mail() function to send the email
    if (mail($recipient_email, $subject, $message, "From: $sender_email")) {
        echo "Thank you for contacting us!";
    } else {
        echo "Sorry, there was a problem sending your message.";
    }
} else {
    echo "Invalid request";
}
?>
