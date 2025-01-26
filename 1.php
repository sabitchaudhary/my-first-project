<?php
session_start();  // Start a session for managing user authentication

$servername = "localhost";
$username = "root";
$password = "";
$database = "project_gobardiha_farming_company";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginAdmin = $_POST['username'];
    $loginPassword = $_POST['password'];

    // Check if the email and password match a record in the database
    $loginQuery = "SELECT * FROM admins WHERE username = '$loginAdmin' AND password = '$loginPassword'";
    $result = $conn->query($loginQuery);

    if ($result->num_rows > 0) {
        // User is authenticated, redirect to the main page
        $_SESSION['logged_in'] = true;
        header("location: admin_dashboard.php");
        exit();
    } else {
        // Invalid login credentials, display an error message
        $error = "Invalid email or password";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Authentication</title>
</head>
<body>

    <h2>Admin Authentication</h2>
    <?php
    if (isset($error)) {
        echo '<p style="color: red;">' . $error . '</p>';
    }
    ?>

</body>
</html>
