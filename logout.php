<?php
session_start(); // Start the session to access session variables

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: log1.php"); // Redirect to the login page if not logged in
    exit();
}

// Logout: Unset or destroy session variables
unset($_SESSION['logged_in']);

// Alternatively, you can use session_destroy() to destroy the entire session
// session_destroy();

// Redirect to the login page after logout
header("Location: homepage1.php");
exit();
?>
