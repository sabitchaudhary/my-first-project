<?php
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);

    // Corrected SQL query
    $sql = "SELECT signin FROM  login WHERE email='$username' AND password='$Password'";
  
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);

    if ($count == 1){
        session_start();
        // echo "Login successfully";
        header("location:homepage.php");
         $_SESSION['loggedin'] = true;
    } else {
        echo " <script> alart( Unable to login)</script>";
        // header("location:UserLogin.php");
    }
}
?>