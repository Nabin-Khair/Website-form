<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "nabinkhair12@gmail.com";
    $subject = "Message from GitHub Website Contact Form";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page or any other page after successful submission
    header("Location: https://example.com/thank-you.html");
    exit;
}
?>
