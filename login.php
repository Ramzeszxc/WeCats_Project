<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Dummy account for testing
$dummy_email = "test@example.com";
$dummy_password = "password123";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['Email']);
    $password = htmlspecialchars($_POST['Password']);

    // Validate credentials
    if ($email === $dummy_email && $password === $dummy_password) {
        // Redirect to dashboard.html on success
        header("Location: dashboard.html");
        exit();
    } else {
        // Redirect back to login page with an error message
        $error_message = "Invalid email or password.";
        header("Location: homebase.php?error=" . urlencode($error_message));
        exit();
    }
}
?>