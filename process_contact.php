<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    
    // Handle service checkboxes
    $services = isset($_POST["service"]) ? $_POST["service"] : [];
    $selectedServices = [];
    
    if (!empty($services)) {
        foreach ($services as $service) {
            $selectedServices[] = strip_tags(trim($service));
        }
    }
    
    // Get message if it exists in the form
    $message = isset($_POST["message"]) ? strip_tags(trim($_POST["message"])) : "";

    // Validate form data
    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle validation errors
        http_response_code(400);
        echo "Please fill out all required fields and provide a valid email address.";
        exit;
    }

    // Set the recipient email address
    $to = "info@promaafrica.com"; // Replace with your actual webmail address

    // Set the email subject
    $email_subject = "New Quote Request from Website";

    // Build the email message
    $email_body = "You have received a new quote request from your website contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    
    if (!empty($phone)) {
        $email_body .= "Phone: $phone\n";
    }
    
    // Add selected services to email
    if (!empty($selectedServices)) {
        $email_body .= "Services Requested:\n";
        foreach ($selectedServices as $service) {
            $serviceName = "";
            switch ($service) {
                case "valuation":
                    $serviceName = "Valuation Advisory Services";
                    break;
                case "surveying":
                    $serviceName = "Land Surveying";
                    break;
                case "administration":
                    $serviceName = "Land Administration";
                    break;
                case "asset":
                    $serviceName = "Asset Management";
                    break;
                case "property":
                    $serviceName = "Property Management";
                    break;
                case "realestate":
                    $serviceName = "Plots/Farms & Houses";
                    break;
                case "other":
                    $serviceName = "Other";
                    break;
                default:
                    $serviceName = $service;
            }
            $email_body .= "- $serviceName\n";
        }
    }
    
    if (!empty($message)) {
        $email_body .= "\nAdditional Message:\n$message\n";
    }

    // Set the email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Success - Redirect to a thank you page or display a success message
        http_response_code(200);
        echo "Thank you for your quote request! We will contact you shortly.";
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