<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_gobardiha_farming_company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $salary = mysqli_real_escape_string($conn, $_POST['salary']);
    $employee_id = mysqli_real_escape_string($conn, $_POST['employee_id']);
    $employee_name = mysqli_real_escape_string($conn, $_POST['employee_name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // Insert data into the database
    $sql = "INSERT INTO employee (salary, employee_id, employee_name, address) 
            VALUES ('$salary', '$employee_id', '$employee_name', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Employee added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>