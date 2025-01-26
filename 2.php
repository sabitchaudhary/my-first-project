<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "project_gobardiha_farming_company";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Admin user details
$adminUsername = "admin";
$adminPassword = password_hash("admin123", PASSWORD_DEFAULT); // Hash the password

// Insert admin user into the database
$query = "INSERT INTO admins (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $adminUsername, $adminPassword);

if ($stmt->execute()) {
    echo "Admin user created successfully.";
} else {
    echo "Error creating admin user: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
