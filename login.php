<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project_gobardiha_farming_company";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrieve data from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Check if the email already exists
$checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($checkEmailQuery);

if ($result->num_rows > 0) {
    // Email already exists
    echo '<script>alert("Error: your password is wrong");</script>';
} else {
    // Insert data into the database using prepared statement
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $password =($password); //  the password
    $stmt->bind_param("ss",$email, $password);

    if ($stmt->execute() === TRUE) {
        // Data inserted successfully

        // Now, check email and password for login
        $loginQuery = "SELECT * FROM users WHERE email = '$email'";
        $loginResult = $conn->query($loginQuery);

        if ($loginResult->num_rows > 0) {
            $user = $loginResult->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                // Password is correct, redirect to the main page
                header('Location: home.php');
                exit();
            } else {
                // Incorrect password
                echo '<script>alert("Error: Incorrect password");</script>';
            }
        }
    } else {
        // Error during insertion
        echo '<script>alert("Error: ' . $stmt->error . '");</script>';
    }

    $stmt->close();
}

$conn->close();
?>
