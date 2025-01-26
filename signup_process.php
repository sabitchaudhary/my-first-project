<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $phone = htmlspecialchars($_POST["phone"]);
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $address = htmlspecialchars($_POST["address"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Simple validation (you should add more robust validation)
    if (empty($phone) || empty($firstName) || empty($lastName) || empty($address) || empty($email) || empty($password)) {
        die("All fields are required");
    }

    // You should add more thorough email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address");
    }

    // Further validation and database operations should be added here

    // For simplicity, let's just print the collected data
    echo "Phone: $phone <br>";
    echo "First Name: $firstName <br>";
    echo "Last Name: $lastName <br>";
    echo "Address: $address <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>";

    // In a real application, you would store the data securely in a database
} else {
    // Redirect to the signup page if accessed directly without submitting the form
    header("Location: signup.php");
    exit();
}
?>
