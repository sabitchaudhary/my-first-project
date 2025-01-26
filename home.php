<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
	<?php
include("menu.php");
?>

</head>
<a href="home.php" style="text-decoration: none;"> <h2 style="font-family: algerian; text-align: center;">HOME</h2></a>
<body>
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/10.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/9.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/2.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<?php
include("footer1.php");
?>
</html>