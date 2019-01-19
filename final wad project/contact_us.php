<!DOCTYPE html>
<?php
require_once "server/functions.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">


    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/final.css">

</head>

<body>

<!-- ****************************HEADER BEGINS HERE*****************************-->
<div class="container-fluid px-3">
    <!--LOGO-->
    <div class="row mb-3 mb-sm-0">
        <div class="col-sm-6">
            <h1 class="text-center text-sm-left" style="font-family: 'Pacifico', cursive;">RESERVEit </h1>
        </div>
        <div class="col-sm-6 text-center text-sm-right">
            <div class="btn-group mt-sm-2">
                <div class="mx-2"><a href="registration_page.php" class="btn btn-primary px-3">Sign up</a></div>
                <div class="mx-2"><a href="signin.php" class="btn btn-secondary px-3">Login</a></div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <ul class="topnav1">
                <li><a class="active" href="index.php"><i class="fas fa-home"></i>  Home</a></li>
                <li><a href="#news"><i class="fas fa-newspaper"></i>  News</a></li>
                <li><a href="contact_us.php"><i class="fas fa-phone"></i>  Contact</a></li>
                <li><a href="about.php"><i class="fas fa-users"></i>  About</a></li>
                <li class="dropdown1">
                    <a href="#menu" class="dropbtn">More <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown1-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </li>
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i> </button>
                    </form>
                </div>
            </ul>
        </div>
    </div>
    <!-- ****************************CONTACT US BEGINS HERE*****************************-->
    <div class="row">
        <div class="col">
            <h1 class="contact_title">Contact Us</h1>
        </div>
    </div>
    <div class="row container-fluid">
        <div class="col contact_us_container m-0 ">
            <div class="form_container col-lg-5 col-md-6 col-sm-12 col-xs-12" >

                <form class="contact_form" >
                    <h4 >Write Us</h4>
                    <input class="contact_input" type="text" name="client_name" placeholder="Name">
                    <input class="contact_input" type="email" name="client_email" placeholder="Email">
                    <input class="contact_input" type="text" name="client_number" placeholder="Number">
                    <textarea class="contact_text_area">Your Message Here</textarea>
                    <input class="submit_button" type="submit" name="submit" value="Send Message">
                </form>
            </div>



        </div>
    </div>
    <div class="row container-fluid">
        <div class="contact_details col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <h4 >Contact Details</h4>
            <hr>
            <div class="contact_details_row row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <i class="fas fa-fax"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <span> +92 423 1234567</span>
                </div>
            </div>
            <div class="contact_details_row row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <span> +92 300 1234567</span>
                </div>
            </div>
            <div class="contact_details_row row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <span> info@reserveit.com</span>
                </div>
            </div>
            <div class="contact_details_row row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <span> 123 Main Boluevard Lahore</span>
                </div>
            </div>
        </div>
        <div class="col-lg col-sm-4 map_container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.616123601826!2d74.26573642537555!3d31.446915973919346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919017432b1835b%3A0xe396992a5b05891c!2sUniversity+of+Central+Punjab!5e0!3m2!1sen!2s!4v1542485280139" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>



    <!-- ****************************CONTACT US ENDS HERE*****************************-->




    <!--FOOTER START-->
    <div class="footer center container-fluid">
        <div class="row m-0 footer-main" >
            <div class="col-lg-6 col" style="margin-left: 0">
                <div>
                    <h2>Website Name</h2>
                    <div class="decor d-lg-none"></div>
                </div>
                <div>
                    <div class="my-small-text SD-padding">
                        Slogan Slogan Slogan Slogan
                    </div>
                    <div class="decor d-lg-none"></div>
                </div>
                <div>
                    <div class="my-small-text SD-padding">
                        Deatail Deatail Deatail Deatail Deatail Deatail Deatail Deatail Deatail Deatail Deatail Deatail
                        Deatail Deatail Deatail
                    </div>
                    <div class="decor d-lg-none"></div>
                </div>
            </div>

            <div class="center footer-main-end col-lg-6">
                <div> <h2>Links</h2></div>
                <ul class="my-small-text">
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Our Team</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="icon float-lg-right col-lg-6">
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-google-plus-square"></i>
                <i class="fab fa-pinterest-square"></i>
                <i class="fab fa-linkedin"></i>
            </div>
            <div class="copyright-font footer-copyright-end col-lg-6">
                Copyright © 2018-2050 - All rights reserved.
            </div>
        </div>
    </div>
    <!--FOOTER END-->

    <!--END-->
</div>
<script src="js/script.js"></script>
</body>
</html>