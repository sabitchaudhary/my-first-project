<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Order Form</title>
    <?php 
include("menuservice.php");
    ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
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
    $order_id = mysqli_real_escape_string($conn, $_POST['order_id']);
    $number_of_items = mysqli_real_escape_string($conn, $_POST['number_of_items']);
    $order_location = mysqli_real_escape_string($conn, $_POST['order_location']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $availability = mysqli_real_escape_string($conn, $_POST['availability']);

    // Insert data into the database
    $sql = "INSERT INTO orders (order_id, number_of_items, order_location, price, availability) 
            VALUES ('$order_id', '$number_of_items', '$order_location', '$price', '$availability')";

    if ($conn->query($sql) === TRUE) {
        echo "Order added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<h2>Order Form</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="order_id">Order ID:</label>
    <input type="text" name="order_id" required>

    <label for="number_of_items">Number of Items:</label>
    <input type="number" name="number_of_items" required>

    <label for="order_location">Order Location:</label>
    <input type="text" name="order_location" required>

    <label for="price">Price:</label>
    <input type="number" step="0.01" name="price" required>

    <label for="availability">Availability:</label>
    <select name="availability" required>
        <option value="available">Available</option>
        <option value="not_available">Not Available</option>
    </select>

    <button type="submit">Add Order</button>
</form>


    <?php
    // PHP code to process the form data and insert into the database would go here.
    // You can follow the previous PHP example for that.
    ?>
</body>
<?php
include("footer1.php");
?>
</html>
