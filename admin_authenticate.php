<?php
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "project_gobardiha_farming_company";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminUsername = $_POST['username'];
    $adminPassword = $_POST['password'];

    // Check if the admin credentials are valid
    $query = "SELECT * FROM admins WHERE username = '$adminUsername' AND password = '$adminPassword'";
    $result = $conn->query($query);

    if ($result->num_rows >0) {
        // $admin = $result->fetch_assoc();

        // // Verify the password
        
        //     if (password_verify($adminPassword, $admin['password'])) {
    // Password is valid, set session variables and redirect to admin dashboard
    // session_start();
    $_SESSION['username'] = $admin['username'];
    // Avoid storing the actual password in the session; it's unnecessary and insecure
    // $_SESSION['password'] = $admin['password'];

    // Redirect to admin dashboard or main page
    header("Location: admin_dashboard.php");
    exit();
           
        } else {
            $error = "Invalid password";
        }
     else {
        $error = "Invalid username";
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
