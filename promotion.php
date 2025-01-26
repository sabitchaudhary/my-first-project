<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion Form</title>
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
    $promo_code = mysqli_real_escape_string($conn, $_POST['promo_code']);
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
    $promo_name = mysqli_real_escape_string($conn, $_POST['promo_name']);

    // Insert data into the database
    $sql = "INSERT INTO promotions (promo_code, product_name, product_id, promo_name) 
            VALUES ('$promo_code', '$product_name', '$product_id', '$promo_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Promotion created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<h2>Promotion Form</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="promo_code">Promo Code:</label>
    <input type="text" name="promo_code" required>

    <label for="product_name">Product Name:</label>
    <input type="text" name="product_name" required>

    <label for="product_id">Product ID:</label>
    <input type="text" name="product_id" required>

    <label for="promo_name">Promo Name:</label>
    <input type="text" name="promo_name" required>

    <button type="submit">Create Promotion</button>
</form>


    <?php
    // PHP code to process the form data would go here.
    // You can store the data in a database, apply discounts, etc.

    ?>
</body>
<?php
include("footer1.php");
?>
</html>
