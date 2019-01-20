<!DOCTYPE html>
<?php
require_once "server/functions.php";
?>
<html lang="en">
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
    <div class="row links">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item pt-5"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active pt-5" aria-current="page">Register</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--************************************HEADER END*********************************-->




    <!--************************************CONTENT START*********************************-->



    <section class="register">
        <div class="container-fluid px-3 my-3 my-md-5">
            <div class="row">
                <div class="col-12">
                    <h1>Register</h1>
                    <p>Please fill in this form to create an account.</p>
                </div>

                <div class="col-md-6">
                    <label><i class="fas fa-user"> </i><b> Firstname</b></label>
                    <input type="text" class="form-control" id="fn" name="fname" "placeholder="Enter firstname" name="name" required>
                </div>

                <div class="col-md-6">
                    <label><i class="fas fa-users"></i><b> Lastname</b></label>
                    <input type="text" class="form-control" id="ln" name="lname" placeholder="Enter lastname" name="name" required>
                </div>


                <div class="form-group col-md-6">
                    <div class="select-list">
                        <label><i class="fas fa-transgender"></i><b> Gender</b></label>
                        <input type="radio" name="gen" value="male"> Male &nbsp;
                        <input type="radio" name="gen" value="female"> Female &nbsp;
                        <input type="radio" name="gen" value="other"> Other
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="Date"><i class="fas fa-clock"></i><b> Date of Birth:</b></label>
                    <input type="date" id="dob" name="trip-start" class="form-control" min="1970-01-01" max="2019-12-31">
                </div>

                <div class="col-12">
                    <label for="email"><i class="fas fa-envelope"></i><b> Email</b></label>
                    <input type="text" class="form-control" id="e" name="email" placeholder="Enter Email" name="email" required>
                </div>

                <div class="col-md-6">
                    <label for="psw"><i class="fas fa-key"></i><b> Password</b></label>
                    <input type="password" id="ps" class="form-control" name="pw" placeholder="Enter Password" name="psw" required>
                </div>

                <div class="col-md-6">
                    <label for="psw-repeat"><i class="fas fa-key"></i><b> Repeat Password</b></label>
                    <input type="password" id="ps2" class="form-control" placeholder="Repeat Password" name="psw-repeat" required>
                </div>

                <div class="col-12">
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                </div>
                <div class="col-md-8 mx-auto">
                    <input type="button" class="registerbtn btn" value="Register" name="reg_data" onclick="processString()">
                    <div id="data">
                        <?php setdata(); ?>
                    </div>
                </div>
                <div class="col-12">
                    <div>
                        <p id="para" align="center"></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="signin py-3 mt-2">
                        <p class="m-0">Already have an account? <a href="signin.php">Sign in</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--************************************CONTENT END*********************************-->





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

    <!--<script src="js/jquery-3.3.1.js"></script>-->
    <!--<script src="js/popper.js"></script>-->
    <!--<script src="js/bootstrap.js"></script>-->
</div>
<script src="js/script.js"></script>
</body>
</html>