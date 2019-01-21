
<!DOCTYPE html>
<html lang="en">
<?php
require_once "db_connection.php";
setdata();
data_exits_or_not();
//forget_password();
/*azan space*/
/**
 *
 */
function setdata()
{
    global $con;
    if(isset($_POST['reg_data']))
    {
        $firtname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $password = $_POST['pw'];
        $dob = $_POST['trip-start'];
        $gender = $_POST['gen'];
        $email = $_POST['email'];
        $insertQuery = "insert into registration(email,firstname,lastname,dob,gender,password)
        values('$email','$firtname','$lastname','$dob','$gender','$password');";
        $res = mysqli_query($con,$insertQuery);
        if(!$res)
        {
            echo "Not Executed";
        }
        header("location:../registration_page.php");
    }
}

/*azan space*/



//irtaza space

function get_restaurants()
{
    global $con;
    $getProQuery = '';
    if(!isset($_GET['cat']) && !isset($_GET['search'])){
        $getProQuery = "select * from restaurants order by RAND();";
    }
    else if(isset($_GET['cat'])){
        $pro_cat_id = $_GET['cat'];
        $getProQuery = "select * from restaurants where category = '$pro_cat_id'";
    }
    else if(isset($_GET['search'])){
        $user_query = $_GET['search'];
        $getProQuery = "select * from products where keywords like '%$user_query%'";
    }
    $getProResult = mysqli_query($con,$getProQuery);
    $count_pro = mysqli_num_rows($getProResult);
    if($count_pro==0){
        echo "<h4 class='alert-warning align-center my-2 p-2'> No Restaurant found</h4>";
    }
    while($row = mysqli_fetch_assoc($getProResult)){
        $pro_id = $row['id'];
        $pro_title = $row['name'];
        $pro_image = $row['image'];
        echo "
                <div class='col-sm-6 col-md-4 col-lg-2 text-center res-summary' style='margin-left: 14px'>
                    <h5 class='text-capitalize'>$pro_title</h5>
                    <img src='admin/restaurant_images/$pro_image'>
                    <br>
                    <a href='detail.php' class='btn btn-info btn-sm'>Details</a>
                    <a href='#'>
                        <button class='btn btn-primary btn-sm'>
                            Book
                        </button>
                    </a>
                </div>
        ";
    }
}

function get_categories()
{
    global $con;
    $getCatsQuery = "select * from categories";
    $getCatsResult = mysqli_query($con,$getCatsQuery);
    while($row = mysqli_fetch_assoc($getCatsResult)){
        $cat_id = $row['id'];
        $cat_title = $row['title'];
        echo "<li><a class='nav-link text-center'  href='index.php?cat=$cat_id'>$cat_title</a></li>";
    }
}

//irtaza space





/*fareed space*/


function getnews()
{

    global $con;
    $show_n = "select * from news;";
    $show_news = mysqli_query($con, $show_n);

    while($row=mysqli_fetch_assoc($show_news)){
        $news_id = $row['id'];
        $news = $row['news'];
        echo
        "
            <div class=\"row f_newsfield\">
                <div class=\"d-sm-block col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editnews\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> News: </span></label>
                </div>
                
                <div class=\"col-sm-12 col-md-10 col-lg-10 col-xl-10\">
                    <pre class=\"form-control\" type=\"file\" id=\"ins_news\" name=\"edit_news\">$news</pre>
                </div>
            </div>
        ";
    }
}

/*fareed space*/


//saim space


/**
 *
 */
function data_exits_or_not()
{
    global $con;
    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $query="select email,password from registration where email='$email' AND  password='$password'";
        //$query1="select password from registration where  password='$password' ";



        $match_data = mysqli_query($con,$query);
        $c = mysqli_num_rows($match_data);
        //$match_data2 = mysqli_query($con,$query1);
        if($c==0)
        {
            echo "you cant login";
        }
        else
            {
                echo "YOU have logged in successfully";

        }



    }
}

//function forget_password()
//{
//
////    if(isset($_POST['recover-submit']))
////        {
////            $subject="HELLO SIR";
////            $headers = "From: reservit@world.com" . "\r\n";
////                $email = $_POST['email'];
////                //$password = $_POST['password'];
////                $msg = "YOUR PASSWORD IS " ;
////                mail($email,$subject,$msg,$headers);
////
////
////        }
//    if(isset($_POST['recover-submit']))
//    {
//        $mailto = $_POST['email33'];
//
//        $mailSub = "HELLLLO SIRRRRR";
//        $mailMsg = "YOUR PASSWORD IS";
//        require 'PHPMailer-master/PHPMailerAutoload.php';
//        $mail = new PHPMailer();
//        $mail->IsSmtp();
//        $mail->SMTPDebug = 1;
//        $mail->SMTPAuth = true;
//        $mail->SMTPSecure = 'ssl';
//        $mail->Host = "smtp.gmail.com";
//        $mail->Port = 465; // or 587
//        $mail->IsHTML(true);
//    $mail ->Username = "saimmalik8397@gmail.com";
//    $mail ->Password =  ;
//        $mail->SetFrom( "saimmalik8397@gmail.com");
//        $mail->Subject = $mailSub;
//        $mail->Body = $mailMsg;
//        $mail->AddAddress($mailto);
//
//        if (!$mail->Send()) {
//            echo "Mail Not Sent";
//        }
//        else {
//            echo "Mail Sent";
//        }
//    }
//}








//saim space*/





/*tahreem space

tahreem space*/
