<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
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
    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
    $expiry_date = mysqli_real_escape_string($conn, $_POST['expiry_date']);
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);

    // Insert data into the database
    $sql = "INSERT INTO products (product_id, expiry_date, product_name, price) 
            VALUES ('$product_id', '$expiry_date', '$product_name', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<h2>Product Form</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="product_id">Product ID:</label>
    <input type="text" name="product_id" required>

    <label for="expiry_date">Expiry Date:</label>
    <input type="date" name="expiry_date" required>

    <label for="product_name">Product Name:</label>
    <input type="text" name="product_name" required>

    <label for="price">Price:</label>
    <input type="number" step="0.01" name="price" required>

    <button type="submit">Add Product</button>
</form>


    <?php
    // PHP code to process the form data and insert into the database would go here.
    // You can follow the previous PHP example for that.
    ?>
    <?php
include("footer1.php");
?>
</body>
</html>
