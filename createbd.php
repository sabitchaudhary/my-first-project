<?php

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";

try {
    // Connect to MySQL server
    $pdo = new PDO("mysql:host=$host", $username, $password);
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // SQL to create the database
    $sql = "CREATE DATABASE IF NOT EXISTS `project_gobardiha_farming_company`";
    
    // Execute the SQL statement
    $pdo->exec($sql);
    
    echo "Database created successfully";
} catch (PDOException $e) {
    die("Error creating database: " . $e->getMessage());
}

?>
