<?php
  include("connectdatab.php");
     $query="select * from users";
     $data=mysqli_query($conn,$query);
   ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    Displaying Data
  </title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style type="text/css">
    .table{
      background: lightblue;
      border: 2px solid black;
      
    }
  </style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style type="text/css">
   body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
    }

    header {
      background-color:#64b7ff;
      color: #fff;
      height: 60px;
      text-align: center;
    }

    nav {
      display: flex;
      background-color:#fff;

      padding: 1em;
      justify-content: space-around;
    }

    section {
      padding: 1em;
      display: flex;
      justify-content: space-between;
    }

    .profile {
      flex: 1;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 1em;
      margin: 1em;
      text-align: center;
    }

    .profile img {
          width: 237px;
    height: 245px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1em;
    }

    .details {
      margin-bottom: 1em;
    }

    .settings {
      flex: 1;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 1em;
      margin: 1em;
      height: 200px;
    }

    .form-group {
      margin-bottom: 1em;
    }

    label {
      display: block;
      margin-bottom: 0.5em;
    }

    input {
      width: 100%;
      padding: 0.5em;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 0.5em 1em;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  a{
     color: black;
  }
</style>
<body>
<body style="background-color: lightgrey;">

    
  <header>
    <h1 style="font-family: algerian;">Admin Dashboard</h1>
  </header>

  <nav>
    <button onclick="goBack()"><p align="text-center">Go Back</p></button>

<script>
    function goBack() {
        window.history.back();
    }
</script>


    <a href="#">Dashboard</a>
    <a href="dbsignin.php">Check Users</a>
    <a href="employeeDashBoard.php">employees</a>
     <a href="orderDashBoard.php">orders</a>
       <a href="productDashBoard.php">Products</a>
       <a href="promotionDashBoard.php">promotions</a>
       <a href="StoreDashBoard.php">stores</a>

  </nav>

  <section>
    <div class="profile">
      <img src="img\sabit.jpg" alt="Profile Picture">
      <div class="details">
        <h2>Sabit Chaudhary</h2>
        <p>Email: sabotchaudhary@gmail.com</p>
        <p>Role: Administrator</p>
      </div>
    </div>

    <div class="settings">
      <h2>Account Settings</h2>
      <form>
        <div class="form-group">
          <label for="username"></label>
          <input type="text" id="username" name="username" value="SabitChaudhary">
        </div>

 
</form>
</body>
</html>