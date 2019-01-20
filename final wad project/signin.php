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

    <?php
    include 'header.php';
    ?>

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
                        <input type="text" class="form-control" id="password" name="password" placeholder="Password">
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
                </div>

                <div>
                    <p id="s">


                    </p>
                </div>

            </div>
        </div>
    </div>

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