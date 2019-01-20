
<!DOCTYPE html>
<html lang="en">
<?php
require_once "db_connection.php";

/*azan space*/
function setdata()
{
    global $con;
    if(isset($_POST['reg_data']))
    {
        $firtname = $_POST['fname'];
        $lastname = $_POST['lanme'];
        $password = $_POST['pw'];
        $dob = $_POST['start_trip'];
        $gender = $_POST['gen'];
        $email = $_POST['email'];

        $insertQuery = "insert into registration(email,firstname,lastname,gender,dob,password)
        values('$email','$firtname','$lastname','$dob','$gender','$password');";
        $res = mysqli_query($con,$insertQuery);
        if(!$res)
        {
            echo "Not Executed";
        }
    }
}
/*azan space*/



/*irtaza space

irtaza space*/





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

        $query="select email,password from registration where email=$email AND password=$password ";


    }


}








//saim space*/





/*tahreem space

tahreem space*/
