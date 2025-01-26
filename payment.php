<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
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
    $invoice = mysqli_real_escape_string($conn, $_POST['invoice']);
    $payee_name = mysqli_real_escape_string($conn, $_POST['payee_name']);
    $product_purchase = mysqli_real_escape_string($conn, $_POST['product_purchase']);
    $amount_paid = mysqli_real_escape_string($conn, $_POST['amount_paid']);
    $payment_mode = mysqli_real_escape_string($conn, $_POST['payment_mode']);

    // Insert data into the database
    $sql = "INSERT INTO payments (invoice, payee_name, product_purchase, amount_paid, payment_mode) 
            VALUES ('$invoice', '$payee_name', '$product_purchase', '$amount_paid', '$payment_mode')";

    if ($conn->query($sql) === TRUE) {
        echo "Payment submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<h2>Payment Form</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="invoice">Invoice:</label>
    <input type="text" name="invoice" required>

    <label for="payee_name">Payee Name:</label>
    <input type="text" name="payee_name" required>

    <label for="product_purchase">Product Purchase:</label>
    <input type="text" name="product_purchase" required>

    <label for="amount_paid">Amount Paid:</label>
    <input type="number" step="0.01" name="amount_paid" required>

    <label for="payment_mode">Payment Mode:</label>
    <select name="payment_mode" required>
        <option value="credit_card">Credit Card</option>
        <option value="debit_card">Debit Card</option>
        <option value="paypal">PayPal</option>
        <option value="e-sewa">E-Sewa</option>
        <option value="khalti">Khalti</option>
        <option value="ime_pay">IME Pay</option>
        <!-- Add more options as needed -->
    </select>

    <button type="submit">Submit Payment</button>
</form>

    <?php
    // PHP code to process the form data would go here.
    // You can store the data in a database, send payment confirmation, etc.
    ?>
</body>
<?php
include("footer1.php");
?>
</html>
