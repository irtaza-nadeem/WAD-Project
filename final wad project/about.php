<!DOCTYPE html>
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
<div class="container">
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
                        <button type="submi"><i class="fa fa-search"></i> </button>
                    </form>
                </div>

            </ul>
        </div>
    </div>


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
                                <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Email address...">
                                <span class="input-group-btn" style="">
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
    <div class="footer center">
        <div class="footer-main row m-0" >
            <div class="col-sm-12 col-lg-6 col" style="margin-left: 0">
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

            <div class="center col-sm-12 footer-main-end col-lg-6">
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


</body>
</html>