<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="script.js"></script>
</head>

<body>

    <div class="banner">

        <div class="navbar">
            <button>Travel</button>
            <!-- <img src="one.png" class="logo" alt=""> -->

            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="Places.php">Places</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="about.php">About us</a></li>
                <?php
                session_start();  
                // include 'login.php';

                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ) {
                    
                    echo $_SESSION["email"];
                    echo '<a href="logout.php"><span>Logout</span></a></li>';
                } else {
                    // echo '<a href="registerform.html"><span>Login/Register</span></a></li>';
                 echo  '<button> <a href="signup.php">Sign up</a></button>
    
                    <button> <a href="login.php">login</a></butto>';
                }
                ?>

            </ul>
        </div>

        <div class="content">
            <h1>TRAVEL WITH US</h1>
            <div>
                <button>Explore more</button>
                <button>Watch more</button>
            </div>
        </div>
    </div>
    <div class="Places"></div>
</body>

</html>