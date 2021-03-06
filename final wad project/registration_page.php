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
<script>
    function check_email(str)
    {
        if (str.length == 0) {
            document.getElementById("msg4").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("msg4").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "check_email.php?e=" + str, true);
            xmlhttp.send();
            //document.getElementById('hint').innerHTML = 'loading...';
        }
    }
</script>
<body>

<!--************************************HEADER START*********************************-->
<div class="container-fluid px-3">

    <?php
    include 'header.php';
    ?>

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
            <form action="server/functions.php" method="POST" onsubmit="return processString()" class="myform">
                <div class="row">
                    <div class="col-12">
                        <h1>Register</h1>
                        <p>Please fill in this form to create an account.</p>
                    </div>
                    <div class="col-md-6">
                        <label><i class="fas fa-user"> </i><b> Firstname</b></label>
                        <input type="text" class="form-control" id="fn" name="fname" placeholder="Enter firstname" name="name">
                        <div id="msg"></div>
                    </div>
                    <div class="col-md-6">
                        <label><i class="fas fa-users"></i><b> Lastname</b></label>
                        <input type="text" class="form-control" id="ln" name="lname" placeholder="Enter lastname" name="name">
                        <div id="msg1"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="select-list">
                            <label><i id="g" class="fas fa-transgender"></i><b> Gender</b></label>
                            <input type="radio" name="gen" value="male"> Male &nbsp;
                            <input type="radio" name="gen" value="female"> Female &nbsp;
                            <input type="radio" name="gen" value="other"> Other
                        </div>
                        <div id="msg2"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="Date"><i class="fas fa-clock"></i><b> Date of Birth:</b></label>
                        <input type="date" id="dob" name="trip-start" class="form-control" min="1970-01-01" max="2019-12-31">
                        <div id="msg3"></div>
                    </div>
                    <div class="col-12">
                        <label for="email"><i class="fas fa-envelope"></i><b> Email</b></label>
                        <input type="text" class="form-control" id="e" name="email" placeholder="Enter Email" name="email" onkeyup="check_email(this.value)">
                        <div id="msg4"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="psw"><i class="fas fa-key"></i><b> Password</b></label>
                        <input type="password" id="ps" class="form-control" name="pw" placeholder="Enter Password" name="psw">
                        <div id="msg5"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="psw-repeat"><i class="fas fa-key"></i><b> Repeat Password</b></label>
                        <input type="password" id="ps2" class="form-control" placeholder="Repeat Password" name="psw-repeat">
                        <div id="msg6"></div>
                    </div>
                    <div class="col-12">
                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                    </div>
                    <div class="col-md-8 mx-auto">
                        <input type="submit" class="registerbtn btn" value="Register" name="reg_data">
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
            </form>
        </div>
    </section>

    <!--************************************CONTENT END*********************************-->




    <!--FOOTER START-->
    <?php
    include 'footer.php';
    ?>
    <!--FOOTER END-->


    <!--<script src="js/jquery-3.3.1.js"></script>-->
    <!--<script src="js/popper.js"></script>-->
    <!--<script src="js/bootstrap.js"></script>-->
</div>
<script src="js/script.js"></script>
</body>
</html>