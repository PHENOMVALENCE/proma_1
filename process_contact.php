<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $subject = strip_tags(trim($_POST["subject"]));
    $message = strip_tags(trim($_POST["message"]));

    // Validate form data (optional but recommended)
    if (empty($name) || empty($subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle validation errors (e.g., redirect back to the form with an error message)
        http_response_code(400);
        echo "Please fill out all required fields and provide a valid email address.";
        exit;
    }

    // Set the recipient email address (your webmail address)
    $to = "info@promaafrica.com"; // Replace with your actual webmail address

    // Set the email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Build the email message
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    if (!empty($phone)) {
        $email_body .= "Phone: $phone\n";
    }
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message\n";

    // Set the email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Success - Redirect to a thank you page or display a success message
        http_response_code(200);
        echo "Thank you for your message. We will be in touch soon!";
        // You can also redirect: header("Location: thank_you.html");
    } else {
        // Error - Display an error message
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }

} else {
    // Not a POST request, redirect to the form or display an error
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
    // You can also redirect: header("Location: contact.html");
}
?>