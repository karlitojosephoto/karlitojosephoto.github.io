<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $option = $_POST['option'];

    // Set receiver email address
    $to = "receiver@example.com"; // Replace with your email

    // Set subject based on selected option
    $subject = ($option == 'Inquiry') ? "Inquiry from $name" : "Booking from $name";

    // Set email content
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message";

    // Set additional headers
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    // Handle if accessed directly
    echo "This script should not be accessed directly.";
}
?>