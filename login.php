<?php
// Start the session
session_start();

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Dummy user credentials for demonstration
$valid_email = "michaelangelou.quinit@g.msuiit.edu.ph";
$valid_password = "sept232005";

// Get the submitted form data
$email = $_POST['Email'] ?? '';
$password = $_POST['Password'] ?? '';

// Debugging output
var_dump($email, $password);

// Check if the credentials are valid
if ($email === $valid_email && $password === $valid_password) {
    // Set session variables (optional)
    $_SESSION['email'] = $email;

    // Redirect to dashboard.html
    header("Location: dashboard.html");
    exit();
} else {
    // Redirect back to login page with an error message
    header("Location: homebase.html?error=invalid_credentials");
    exit();
}
?>