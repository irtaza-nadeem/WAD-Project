<!DOCTYPE html>
<html lang="en">
<?php
require_once "server/functions.php";
?>
<head>
    <meta charset="UTF-8">
    <title>Restaurant Reservation System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">


    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/final.css">

</head>

<body>

<!--************************************HEADER START*********************************-->
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

    <!--HEADER IMAGE OR ANIMATION-->


<!--************************************HEADER END*********************************-->




<!--************************************CONTENT START*********************************-->


    <div class="box center" style="margin-bottom: 15px; margin-top: 15px">

        <div>
            <img src="images/signin.png" width="100" height="100">
        </div>

        <div>
            <div>
                <div style="padding-top: 30px" class="row">
                    <div class="col-1" style="padding-top: 10px"><i class="fas fa-envelope"></i></div>
                    <div class="col">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                    </div>
                </div>

                <div style="padding-top: 0px" class="row">
                    <div class="col-1" style="padding-top: 10px"><i class="fas fa-key"></i></div>
                    <div class="col">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top: 5px">
                <div class="col fp-text">
                    <a href="forgot_password.php" style="color: darkgrey">
                        Forget email or password?
                    </a>
                </div>

                <div class="col-auto">
                    <input class="btn btn-primary" type="submit" name="login" value="Login" onclick="datacheck()">

                    <div id="php_func">
                        <?php data_exits_or_not(); ?>
                    </div>

                </div>

                <div class="col-10">

                    <p id="s" align="center">
                    </p>

                </div>

            </div>
        </div>
    </div>

<!--************************************CONTENT END*********************************-->





<!--FOOTER START-->
<div class="footer center container-fluid px-3">
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
</div>
<!--FOOTER END-->

<!--END-->

<script src="js/script.js"></script>
</body>
</html>