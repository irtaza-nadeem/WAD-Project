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
    <?php
    include 'header.php';
    ?>

    <!--HEADER IMAGE OR ANIMATION-->
    <div class="row">
        <div class="col"><img src="images\header_image.jpg" id="headerimg"></div>
    </div>
    <!--************************************HEADER END*********************************-->


    <!--************************************CONTENT START*********************************-->
    <br>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="bg-light">
            <ul class="">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="nav-link text-center">
                        <i class="fas fa-sitemap"></i>
                        Categories
                    </a>
                    <ul class="collapse show list-unstyled" id="homeSubmenu">
                        <?php get_categories(); ?>
                    </ul>
                </li>
            </ul>
        </nav>
        <article id="content" class="container-fluid bg-white">
            <div class="row align-content-center">
                <?php get_restaurants(); ?>
            </div>
        </article>
    </div>
    <br>
    <!--************************************CONTENT END*********************************-->


    <!--FOOTER START-->
    <?php
        include 'footer.php';
    ?>
    <!--FOOTER END-->

</div>

    <!--END-->

<script src="js/script.js"></script>
</body>
</html>