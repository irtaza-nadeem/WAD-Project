<!DOCTYPE html>
<?php
require_once "server/functions.php";
//require_once  "js/script.js";
if(isset($_POST['submit']))
{
    contact_us();
}
?>

<html lang="en">
<head>
    <script src="js/script.js"></script>
    <meta charset="UTF-8">
    <title>Contact Us</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">


    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/final.css">

</head>

<body>

<!-- ****************************HEADER BEGINS HERE*****************************-->
<div class="container-fluid px-3">
    <?php
        include 'header.php';
    ?>
    ?>
    <!-- ****************************CONTACT US BEGINS HERE*****************************-->
    <div class="row">
        <div class="col">
            <h1 class="contact_title">Contact Us</h1>
        </div>
    </div>
    <div class="row container-fluid">
        <div class="col contact_us_container m-0 ">
            <div class="form_container col-lg-5 col-md-6 col-sm-12 col-xs-12" >

                <form class="contact_form" method="POST" action="#">
                    <h4 >Write Us</h4>
                    <input class="contact_input" type="text" name="client_name" id="client_name" placeholder="Name"  onblur="contactus_name()">
                    <span class="error_msg" id="name_error_msg"></span>

                    <input class="contact_input" type="email" name="client_email" id="client_email" placeholder="Email"  onblur="contactus_email()">
                    <span class="error_msg" id="email_error_msg"></span>

                    <input class="contact_input" type="text" name="client_number" id="client_number" placeholder="Number" onblur="contactus_number()">
                    <span class="error_msg" id="number_error_msg"></span>

                    <textarea class="contact_text_area" name="client_msg" id="client_msg" placeholder="Your message here..." onblur="contactus_msg()"></textarea>
                    <span class="error_msg" id="msg_error_msg"></span>

                    <input class="submit_button" type="submit" name="submit"  value="Send Message" onClick="window.location.reload()">
                    <span class="success_msg" id="msg"></span>
                </form>
            </div>



        </div>
    </div>
    <div class="row container-fluid">
        <div class="contact_details col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <h4 >Contact Details</h4>
            <hr>
            <div class="contact_details_row row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <i class="fas fa-fax"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <span> +92 423 1234567</span>
                </div>
            </div>
            <div class="contact_details_row row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <span> +92 300 1234567</span>
                </div>
            </div>
            <div class="contact_details_row row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <span> info@reserveit.com</span>
                </div>
            </div>
            <div class="contact_details_row row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <span> 123 Main Boluevard Lahore</span>
                </div>
            </div>
        </div>
        <div class="col-lg col-sm-4 map_container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.616123601826!2d74.26573642537555!3d31.446915973919346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919017432b1835b%3A0xe396992a5b05891c!2sUniversity+of+Central+Punjab!5e0!3m2!1sen!2s!4v1542485280139" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>



    <!-- ****************************CONTACT US ENDS HERE*****************************-->




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