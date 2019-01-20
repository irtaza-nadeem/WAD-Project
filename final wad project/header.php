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
            <li><a href="news.php"><i class="fas fa-newspaper"></i>  News</a></li>
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
                <form>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i> </button>
                </form>
            </div>

        </ul>
    </div>
</div>

    <!--************************************HEADER END*********************************-->

<!--END-->

<script src="js/script.js"></script>
</body>
</html>