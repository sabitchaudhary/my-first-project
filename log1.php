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
    $loginEmail = $_POST['email'];
    $loginPassword = $_POST['password'];

    // Check if the email and password match a record in the database
    $loginQuery = "SELECT * FROM users WHERE email = '$loginEmail' AND password = '$loginPassword'";
    $result = $conn->query($loginQuery);

    if ($result->num_rows > 0) {
        // User is authenticated, redirect to the main page
        $_SESSION['logged_in'] = true;
        header("location: home.php");
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
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
       <style type="text/css">
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    margin: 10px 0;
}

input {
    padding: 8px;
    margin-bottom: 15px;
    width: 100%;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #3498db;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #2980b9;
}

    </style>
</head>
<body>
    <div class="login-container">
    <h2>Login</h2>
    <?php if (isset($error)) { echo '<p style="color: red;">' . $error . '</p>'; } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


        <label for="email">Email:</label>
            <input type="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <br>
            <input type="submit" value="Login">
    </form></div>
</body>
</html>
