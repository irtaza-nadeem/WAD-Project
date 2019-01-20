
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





/*fareed space

fareed space*/




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
