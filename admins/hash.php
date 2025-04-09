<?php

$password_to_hash = "Proma@2025";

// Hash the password using the default bcrypt algorithm
$hashed_password = password_hash($password_to_hash, PASSWORD_DEFAULT);

echo "Original Password: " . $password_to_hash . "<br>";
echo "Hashed Password: " . $hashed_password . "<br>";

// Verification example (for demonstration)
$password_to_verify = "Proma@2025"; // Correct password
if (password_verify($password_to_verify, $hashed_password)) {
    echo "Password is valid!";
} else {
    echo "Password is invalid!";
}

$wrong_password_to_verify = "wrongpassword"; // Incorrect password
if (password_verify($wrong_password_to_verify, $hashed_password)) {
    echo "<br>Wrong password is valid (This should not happen)!";
} else {
    echo "<br>Wrong password is invalid (Correct behavior).";
}

?>