<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "info@promaafrica.com"; // Your email address
        $subject = "New Newsletter Subscription";
        $message = "You have a new newsletter subscriber:\n\nEmail: $email";
        $headers = "From: noreply@promaafrica.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "Thank you for subscribing!";
        } else {
            echo "Something went wrong. Please try again.";
        }
    } else {
        echo "Invalid email address.";
    }
} else {
    echo "Invalid request.";
}
?>
