<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS for Footer -->
    <style>
        

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            color: #495057;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .footer-content {
            flex: 1;
            text-align: center;
            padding: 10px;
        }

        .footer-content h3 {
            color: #007bff;
        }

        .footer-content a {
            color: #007bff;
            text-decoration: none;
        }

        .footer-content a:hover {
            text-decoration: underline;
        }

        .copyright {
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
        }
    </style>
</head>

<body>

    <footer>
        <div class="footer-container row-12">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <i class="fa fa-envelope"></i>
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWtDnGDPkHgjbsNWffFBzsqvQMzvRptvxFNHbwxrrfsjrCcxJHRQlnfhFWSCVbVBqBsPpjxcL">
                    <p>Email: sabotchaudhary@gmail.com</p>
                </a>
                <p>Phone: +977 9841888855</p>
            </div>
            <div class="footer-content">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; <?php echo date("Y"); ?> Your Website. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap and Popper.js JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
