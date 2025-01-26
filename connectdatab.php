

<?php

// include("signup.php");
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "project_gobardiha_farming_company";

// create connection
$conn = new mysqli($servername, $username, $password, $database);
    // Check connection    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrive data from form 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $phone = htmlspecialchars($_POST["phone"]);
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $address = htmlspecialchars($_POST["address"]);
    $email = htmlspecialchars($_POST["email"]);
    $password =($_POST["password"]); 

// Check if the email already exists
$checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($checkEmailQuery);

if ($result->num_rows > 0) {
    // echo "Error: Email already exists in the database";
    // header("location:homepage1.php");
    echo " <script> alert('Error: Email already exists in the database')</script>";
         
}
    // Insert user data into the 'users' table
  else{  $sql = "INSERT INTO users (phone, firstName, lastName, address, email, password) 
            VALUES ('$phone', '$firstName', '$lastName', '$address', '$email', '$password')";
   if ($conn->query($sql) === TRUE) {
    // echo "Data inserted successfully";
    //header("location:home.php");
    // echo " <script> alert('data has been successfully isserted')</script>";
     header("location:home.php");    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
// Close the connection
$conn->close();
}
?>