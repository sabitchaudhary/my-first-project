<?php
session_start();

// Unset or destroy session variables
unset($_SESSION['admin_id']);
unset($_SESSION['admin_username']);

// Alternatively, you can use session_destroy() to destroy the entire session
// session_destroy();

// Redirect to the login page after logout
header("Location: loginadmin.php");
exit();
?>
