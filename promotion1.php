<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Staff Information</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .staff-card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }

        .staff-card:hover {
            transform: scale(1.05);
        }

        .staff-image {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .staff-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .staff-details {
            padding: 20px;
        }
    </style>
</head>
<?php
include("menu.php");
?>

<body>

  <caption>
        <h4 style="text-align: center; font-family: verdana;"> (Promotions/Advetrisement)</h4>
  </caption>

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="staff-card">
                    <div class="staff-image">
                        <img src="img/1.jpg" alt="Staff 1">
                    </div>
                    <div class="staff-details">
                        <h1 class="card__header">Mushroom Farming</h1>
        <p class="card__text"> Agriculture Student of <strong>Sarswati Secondary School Gobardiha</strong> Produces Very High Quality of Mushroom Organically </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="staff-card">
                    <div class="staff-image">
                        <img src="img/lemon.jpg" alt="Staff 2">
                    </div>
                    <div class="staff-details">
                        <h2>Lemons</h2>
                        <p>Lemons farming occurs by the<strong> Gobardiha farming company</strong> provide organic lemons </p>
                        

                    </div>
                </div>
            </div>
<div class="col-lg-4 col-md-6">
                <div class="staff-card">
                    <div class="staff-image">
                        <img src="img/a11.jpg" alt="Staff 2">
                    </div>
                    <div class="staff-details">
                        <h2>Bananas</h2>
                        <p>Hybrid bananas with <strong>organic production</strong> in the bank of rapti river</p>
                        
                    </div>
                </div>
            </div>

            <!-- Add more staff cards as needed -->

        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
<?php
include("footer1.php")
    ?>