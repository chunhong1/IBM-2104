<?php
session_start();
require_once 'config.php';
?>
<!DOCTYPE html>

<html>
    <head>

        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text:wght@100&display=swap" rel="stylesheet"><!-- Import font type from the website -->
        <link rel="preconnect" href="https://fonts.gstatic.com"><!-- Import font type from the website -->
        <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300&display=swap" rel="stylesheet"><!-- Import font type from the website -->


        <style>

            h1{
                font-family: 'Big Shoulders Stencil Text', cursive;
                font-size: 40px;
                color:white;
            }

            body{
                background-color:black;
                font-family: Verdana, sans-serif; margin:0                

            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
                color:white
            }

            li {
                float: left;

            }
            li a, .dropbtn {
                display: inline-block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            /*Background turns red when the cursor are on the text */
            li a:hover, .dropdown:hover .dropbtn {
                background-color: red;
            }
            p,h2,h3{
                color:white; 
            }
            .container{ width:100%; }    
            .align-left{ float: left;width:50%; }
            .align-right{ float: right;width:50%; }


            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }

            .container {
                padding: 0 16px;
                font-family: 'Overpass', sans-serif;
            }

            .container::after, .row::after {
                content: "";
                clear: both;
                display: table;
            }

            .button {
                display: inline-block;
                padding: 15px 25px;
                font-size: 24px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color: #4CAF50;
                border: none;
                border-radius: 15px;
                box-shadow: 0 9px #999;
            }

            .button:hover {background-color: #3e8e41}

            .button:active {
                background-color: #3e8e41;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }


            * {box-sizing: border-box}
            body {font-family: Verdana, sans-serif; margin:0}
            .mySlides {display: none}
            img {vertical-align: middle;}

            /* Slideshow container */
            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
            }

            /* Next & previous buttons */
            .prev, .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -22px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
                margin-right: 20px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover, .next:hover {
                background-color: rgba(0,0,0,0.8);
            }





            /* The dots/bullets/indicators */
            .dot {
                cursor: pointer;
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }

            .active, .dot:hover {
                background-color: #717171;
            }

            /* Fading animation */
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
            }

            @keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
                .prev, .next,.text {font-size: 11px}
            }
            td {
                color:white;
                padding-right: 20px;
                padding-bottom: 20px;
            }
            th{
                color:white;
                font-size:25px;
            }
            h2{
                color:white;
            }
            .button {
                background-color: #E0FFFF; /* Green */
                border: 2px solid #555555;
                color: black;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                transition-duration: 0.4s;
                cursor: pointer;
                border-radius: 20px 20px 20px 20px;

            }
            .button:hover {
                background-color: #555555;
                color: white;
            }
            .button a{
                color:black;
            }


        </style>
        <title>Movie</title>
    </head>
    <body>

        <div class='container'>
            <div class="align-left"><h1>Movie </h1></div>
            <div class="align-right">        
                <h1 style="text-align:right"><a style="color:white" href="profile.php">
                        <?php
                        if (isset($_SESSION['login'])) {

                            $username = $_SESSION['username'];
                            print "$username"; //show username on the top right corner if the user had logged in
                        }
                        ?>
                    </a></h1></div>

        </div>



        <ul> <!--Navigation Bar-->

            <?php
            if (isset($_SESSION['login'])) {
                // the bar function will change based on the log in status
                print'        <li><a href="home.php">Home Page</a></li>
        <li><a href="profile.php">Profile </a></li>
        <li><a href="update_profile.php">Update Profile</a></li>
        <li><a href="view_booking.php">Booking History</a></li>
        <li><a href="logout.php">Logout</a></li>';
            } else {
                print '        <li><a href="home.php">Home Page</a></li>
        <li><a href="log.php">Log in </a></li>
        <li><a href="regi.php">Register</a></li>';
            }
            ?>    



        </ul>





