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

<div class="container-fluid px-3">
    <!--************************************HEADER START*********************************-->
    <?php
    include 'header.php';
    ?>
    <!--************************************HEADER END*********************************-->


    <!--************************************CONTENT START*********************************-->
    <br>
        <?php
            getnews();
        ?>
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