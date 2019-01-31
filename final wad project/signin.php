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
    <script>
        function check_email_login(str)
        {
            if (str.length == 0) {
                document.getElementById("no").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("no").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "login_email_check.php?e=" + str, true);
                xmlhttp.send();
                //document.getElementById('hint').innerHTML = 'loading...';
            }
        }
    </script>













    <div class="box center" style="margin-bottom: 15px; margin-top: 15px">

        <div>
            <img src="images/signin.png" width="100" height="100">
        </div>

        <div>
            <div>
                <form action="server/functions.php" method="POST" onsubmit="return datacheck()" class="myform">
                    <div style="padding-top: 30px" class="row">
                        <div class="col-1" style="padding-top: 10px"><i class="fas fa-envelope"></i></div>
                        <div class="col">
                            <input type="text" class="form-control" id="e" name="email" placeholder="Email Address" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" onkeyup="check_email_login(this.value)">

                        </div>
                        <div id="no">
                    </div>

                    </div>

                    <div style="padding-top: 0px" class="row">
                        <div class="col-1" style="padding-top: 10px"><i class="fas fa-key"></i></div>
                        <div class="col">
                            <input type="password" class="form-control" id="p" name="password" placeholder="Password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
                        </div>
                    </div>

                    <div>
                        <input type="checkbox" name="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>   >  REMEMBER ME
                    </div>

            </div>

            <div class="row" style="padding-top: 5px">
                <div class="col fp-text">
                    <a href="forgot_password.php" style="color: darkgrey">
                        Forget email or password?
                    </a>
                </div>

                <div class="col-auto">
                    <input type="submit" class="btn btn-primary" value="Login" name="login">
                </div>

                <div class="col-10">

                    <p id="s" align="center">
                    </p>

                </div>

            </div>
            </form>
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