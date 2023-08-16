<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $serviceType = $_POST["service_type"];
    $additionalInfo = $_POST["additional_info"];

    // Validate form inputs (you can add your own validation logic here)

    // Set SMTP server settings
    ini_set("SMTP", "mail.neptunelabs.co.za");
    ini_set("smtp_port", "465");
    ini_set("sendmail_from", "info@neptunelabs.co.za");

    // Send the email to multiple recipients
    $to = "rethar@neptunelabs.co.za";
    $subject = "New Quote Request";
    $message = "Full Name: $fullName\n";
    $message .= "Email: $email\n";
    $message .= "Service Type: $serviceType\n";
    $message .= "Additional Information: $additionalInfo\n";

    // Send the email
    $headers = "From: info@neptunelabs.co.za" . "\r\n";
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo '<p>Your quote request has been submitted successfully. We will get back to you shortly.</p>';
    } else {
        // Error sending email
        echo '<p>Oops! Something went wrong. Please try again later.</p>';
    }
}
?>
