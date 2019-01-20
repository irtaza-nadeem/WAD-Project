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

    <div class="row no-gutters">
        <div class="col-lg" style="background-color: #2e2d2d;">
            <div class="container text-center abt_us">
                <h1>Who we are?</h1>
                <h5>We are students of University of Central Punjab Lahore</h5>
            </div>
        </div>

        <div class="col-lg" style="background-color: #2e2d2d">
            <div class="container text-center abt_us">
                <h1>What makes us different?</h1>
                <h5>This gives us a clear role and responsibility within the friends community. We help each other to grow with confidence.</h5>
            </div>
        </div>

        <div class="col-lg" style="background-color: #2e2d2d">
            <div class="container text-center abt_us">
                <h1>Why are we doing this?</h1>
                <h5>We are doing this for Web Application Development assignment and project</h5>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 40px; margin-bottom: 40px">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <img   class="displayed" src="images\avatar_boy.png" alt="Avatar">
                    <h5 class="card-subtitle mb-2 text-muted">Irtaza Nadeem</h5>
                    <p class="card-text">Team lead<br> Irtazanadeem@ucp.edu.pk</p>
                    <div class="icon">
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-google-plus-square"></i>
                        <i class="fab fa-pinterest-square"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <img   class="displayed" src="images\avatar_boy.png" alt="Avatar">
                    <h5 class="card-subtitle mb-2 text-muted">Fareed Murtaza</h5>
                    <p class="card-text">Team member <br> Fareedmurtaza@ucp.edu.pk</p>
                    <div class="icon">
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-google-plus-square"></i>
                        <i class="fab fa-pinterest-square"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <img   class="displayed" src="images\avatar_boy.png" alt="Avatar">
                    <h5 class="card-subtitle mb-2 text-muted">Azan Arif</h5>
                    <p class="card-text">Team member <br> Azanarif@ucp.edu.pk</p>
                    <div class="icon">
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-google-plus-square"></i>
                        <i class="fab fa-pinterest-square"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <img   class="displayed" src="images\avatar_girl.png" alt="Avatar">
                    <h5 class="card-subtitle mb-2 text-muted">Tahreem Fatima</h5>
                    <p class="card-text">Team member <br> Tahreemfatima@ucp.edu.pk</p>
                    <div class="icon">
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-google-plus-square"></i>
                        <i class="fab fa-pinterest-square"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 offset-lg-4" style="margin-bottom: 30px">
            <div class="card">
                <div class="card-body">
                    <img   class="displayed" src="images\avatar_boy.png" alt="Avatar">
                    <h5 class="card-subtitle mb-2 text-muted">Saim Malik</h5>
                    <p class="card-text">Team member <br> Saimmalik@ucp.edu.pk</p>
                    <div class="icon">
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-google-plus-square"></i>
                        <i class="fab fa-pinterest-square"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--************************************CONTENT END*********************************-->



    <!--SUBSCRIBE BOX-->
    <div class="row">
        <div class="col">
            <div class="footer-mailchimp">
                <div class="container text-center">
                    <h5>Subscribe to our mailing list to receive an update when new resturant arrive!</h5>
                    <div id="mc_embed_signup">
                        <form role="form" action="https://startbootstrap.us3.list-manage.com/subscribe/post?u=531af730d8629808bd96cf489&amp;id=afb284632f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="novalidate">
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
    <!--SUBSCRIBE BOX END-->

    <!--FOOTER START-->
    <?php
    include 'footer.php';
    ?>
    <!--FOOTER END-->
    <!--END-->
</div>
<script src="js/script.js"></script>
</body>
</html>