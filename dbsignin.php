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

// SQL query to select data
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    echo "Error: " . $conn->error;
} else {
    echo "

<!DOCTYPE html>
<html>
<head>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
    <title>User Detials</title>
</head>
<body>

    <h2>User Detials</h2>
    <table border='1'>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Address</th>
            <th>Email</th>
            <th>Password</th>
        </tr>";

    // Loop through the data and display it in a table
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["SN"]."</td>
               <td>".$row["phone"]."</td>
               <td>".$row["firstName"]."</td>
               <td>".$row["lastName"]."</td>
               <td>".$row["address"]."</td>
               <td>".$row["email"]."</td>
               <td>".$row["password"]."</td></tr>";
    }

    echo "</table></body></html>";
}

// Close connection
$conn->close();
?>
 <!-- back button -->
 <br>
<button onclick="goBack()"><p align="text-center">Go Back</p></button>

<script>
    function goBack() {
        window.history.back();
    }
</script>

