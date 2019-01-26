
<!DOCTYPE html>
<html lang="en">
<?php
require_once "db_connection.php";
setdata();
data_exits_or_not();
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
        if (getemail() == true)
        {
           // echo "<script language=\"javascript\"> alert(\"Email_already_existed\"); </script>";
           // header("location:../registration_page.php");
            echo "Already";
        }
        else{
            $insertQuery = "insert into registration(email,firstname,lastname,dob,gender,password)
            values('$email','$firtname','$lastname','$dob','$gender','$password');";
            $res = mysqli_query($con,$insertQuery);
            if(!$res)
            {
                echo "Not Executed";
            }
            echo "You are now Register";
            /*echo "<script language=\"javascript\"> alert(\"You are now register\"); </script>";
           header("location:../registration_page.php");*/
        }
    }
}
function getemail()
{
    global $con;
    $email = $_POST['email'];
    $query="select email from registration where email='$email';";
    $match_data = mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($match_data)) {
        $e1 = $row['email'];
        if (strcmp($email,$e1)==0)
        {
            return true;
        }
    }
    return false;
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
        $getProQuery = "select * from restaurants where keywords like '%$user_query%'";
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


function data_exits_or_not()
{
    global $con;
    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query="select email,password from registration where email='$email' AND password= '$password';";

        $match_data = mysqli_query($con,$query);

        $c=mysqli_num_rows($match_data);

        if($c==0)
        {
            echo "YOUR ACCOUNT DOESN'T EXISTS";
        }
        else
            {
            header("location:../index.php");
            echo"YOU have logged in successfully";
            }

    }
}

function forget_password()
{


    $email=$_POST['email'];

    $password=$_POST['password'];

    $msg= "YOUR PASSWORD IS ". $password;
    mail($email,"WELCOME TO RESERVEIT",$msg);

}








//saim space*/





//tahreem space

function contact_us()
{
    global $con;
    $name = $_POST['client_name'];
    $email = $_POST['client_email'];
    $num   = $_POST['client_number'];
    $msg   = $_POST['client_msg'];

    $insertQuery = "insert into contacts(name,email,phoneno,message)
        values('$name','$email','$num','$msg')";
    $contacts = mysqli_query($con,$insertQuery);
    if(!$contacts)
    {
        echo "Not Executed";
    }
    header("../contact_us.php");
}

//tahreem space*