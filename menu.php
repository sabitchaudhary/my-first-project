<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>

    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: Green;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: skyblue;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        nav a:hover {
/*            background-color: #555;*/
              text-decoration: none;
        }
        h1:hover {
            color: red;
            border-radius: 3px;
        
           /* Set the color you want on hover */
        }
        header:hover {
            background-color: white;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav button:hover {
            color: black;
            background-color:red;

        }
    </style>
</head>
<body>

    <header>
        <h1 style="font-family: algerian;">Gobardiha Farming Company</h1>

    </header>
    <div>

    <nav>
        <a href="home.php">Home</a>
        <a href="gallary.php">Gallery</a>
        <a href="promotion1.php">Promotion</a>
        <a href="services.php">Services</a>
        <a href="about.php">Help</a>
        <a href="about.php">Contact</a>
        <form action="logout.php">
        <button style="font-family: arial; float: right; color: black; background-color:red ;" type="submit" value="logout">Logout</button>
        </form>
        
    </nav>
</div>
    <!-- Your page content goes here -->

</body>
</html>
