<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set SMTP server settings
    ini_set("SMTP", "mail.neptunelabs.co.za");
    ini_set("smtp_port", "587");
    ini_set("sendmail_from", "info@neptunelabs.co.za");

    $recipient = "info@neptunelabs.co.za"; // Your email address
    $subject = "Newsletter Subscription";
    $email = $_POST["email"];

    // Compose the email body
    $message = "New newsletter subscription:\nEmail: $email";

    // Set the email headers
    $headers = "From: info@neptunelabs.co.za\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($recipient, $subject, $message, $headers)) {
        echo "Thank you for subscribing to our newsletter!";
    } else {
        echo "Error subscribing to the newsletter. Please try again later.";
    }
}
?>
