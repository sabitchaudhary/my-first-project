<?php
include("signup.php");
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "project_gobardiha_farming_company";

try {
    // Connect to MySQL server and select the database
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $phone = htmlspecialchars($_POST["phone"]);
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $address = htmlspecialchars($_POST["address"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password

    // Insert user data into the 'users' table
    $sql = "INSERT INTO users (phone, firstName, lastName, address, email, password) 
            VALUES (:phone, :firstName, :lastName, :address, :email, :password)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":firstName", $firstName);
    $stmt->bindParam(":lastName", $lastName);
    $stmt->bindParam(":address", $address);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);

    // Execute the statement
    try {
        $stmt->execute();
        echo "User registered successfully!";
    } catch (PDOException $e) {
        die("Error inserting data: " . $e->getMessage());
    }
}

?>
