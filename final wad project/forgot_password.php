<!DOCTYPE html>
<?php
require_once "server/functions.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Reservation System</title>

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


    <div class="row" style="margin-top: 20px; margin-bottom: 20px; font-family: 'Calibri'">
        <div class="col-lg-4 col-sm-1 offset-lg-4">

                <div class="card forgot">
                    <div class="card-body">
                        <i class="fas fa-lock icon" style="font-size: 80px; padding-bottom: 10px;   margin: 0;position:relative;"></i>
                        <h3 class="card-subtitle mb-2 text-muted" style="font-family: Calibri; margin-left: 0px">Forgot Password?</h3>
                        <i class="fas fa-envelope icon2"></i>
                        <h6 style="display:inline-block"><strong>Email</strong></h6>
                        <div class="input-group">
                            <input id="email" name="email33" placeholder="Email Address" class="form-control"  type="text">
                        </div>
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit"  style="margin-top: 10px"  onclick="forget_password_check()">

                        <div id="func">

                            <p id="j" align="center">
                            </p>

                        </div>

                    </div>
                </div>

        </div>
    </div>
    <!--************************************CONTENT END*********************************-->


    <<div class="row">
        <div class="col">
            <div class="footer-mailchimp">
                <div class="container text-center">
                    <h5>Subscribe to our mailing list to receive an update when new resturant arrive!</h5>
                    <div id="mc_embed_signup">
                        <form role="form" action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="novalidate">
                            <div class="input-group input-group-lg">
                                <!--<input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Email address...">-->
                                <span class="input-group-btn" style="margin: auto">
                                    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-secondary">Subscribe!</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


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