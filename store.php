<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Form</title>
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
    $store_address = mysqli_real_escape_string($conn, $_POST['store_address']);
    $store_id = mysqli_real_escape_string($conn, $_POST['store_id']);
    $purchase_number = mysqli_real_escape_string($conn, $_POST['purchase_number']);
    $store_name = mysqli_real_escape_string($conn, $_POST['store_name']);
    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);

    // Insert data into the database
    $sql = "INSERT INTO stores (store_address, store_id, purchase_number, store_name, product_id) 
            VALUES ('$store_address', '$store_id', '$purchase_number', '$store_name', '$product_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Store added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<h2>Store Form</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="store_address">Store Address:</label>
    <input type="text" name="store_address" required>

    <label for="store_id">Store ID:</label>
    <input type="text" name="store_id" required>

    <label for="purchase_number">Purchase N.O:</label>
    <input type="text" name="purchase_number" required>

    <label for="store_name">Store Name:</label>
    <input type="text" name="store_name" required>

    <label for="product_id">Product ID:</label>
    <input type="text" name="product_id" required>

    <button type="submit">Add to Store</button>
</form>


    <?php
    // PHP code to process the form data would go here.
    // You can store the data in a database, update inventory, etc.
    ?>
</body>
<?php
include("footer1.php");
?>
</html>
