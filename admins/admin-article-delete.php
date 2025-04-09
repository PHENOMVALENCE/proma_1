<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION["admin_loggedin"]) || $_SESSION["admin_loggedin"] !== true) {
    header("location: admin-login.php");
    exit;
}

// Include database connection
require_once "db_connect.php";

// Check if article ID is provided and is a number
if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $article_id = (int)$_GET["id"]; // Sanitize input

    // Prepare a delete statement
    $sql = "DELETE FROM news_articles WHERE id = ?";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameters
        $param_id = $article_id;

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect to the articles page after successful deletion
            header("location: admin-articles.php");
            exit;
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($conn);
} else {
    // If ID is not provided or invalid, redirect to articles page with an error message
    header("location: admin-articles.php?error=invalid_id");
    exit;
}
?>