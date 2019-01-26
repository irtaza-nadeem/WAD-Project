<?php
require_once "../server/db_connection.php";
$u = "";
$p = "";
$error_msg = '';
session_start();
if(isset($_POST['admin_login']))
{
    $user = $_POST['admin_user'];
    $pass = $_POST['admin_password'];

    if(empty($user))
    {
        $u = "<b>Username Required</b>";
    }
    if(empty($pass))
    {
        $p = "<b>Password Required</b>";
    }

    $q = "select * from admins where username='$user' and password='$pass';";
    $qn = mysqli_query($con, $q);
    $check_user = mysqli_num_rows($qn);
    if($check_user==0)
    {
        $error_msg = 'Password or Email is wrong, try again';
    }
    else
    {
        $_SESSION['admin_user'] = $user;
        if(!empty($_POST['remember']))
        {
            setcookie('admin_user', $user, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('admin_password', $pass, time() + (10 * 365 * 24 * 60 * 60));
        }
        else
        {
            setcookie('admin_user','' );
            setcookie('admin_password', '');
        }
        header('location: menu.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4"> <span class="d-none d-sm-inline"> Admin </span> Login </h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="text-center"><?php echo $error_msg;?></div>
        <br>
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-4 mt-auto">
                <label for="admin_username" class="float-md-right"> <span class="d-sm-none d-md-inline"> Username: </span></label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <input
                            value="<?php echo @$_COOKIE['admin_user']?>" type="text"
                            class="form-control" id="pro_title" name="admin_user" placeholder="Admin Username">
                </div>
            </div>
            <span><?php echo $u; ?></span>
        </div>

        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-4 mt-auto">
                <label for="admin_password" class="float-md-right"> <span class="d-sm-none d-md-inline"> Password: </span></label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <input
                            value="<?php echo @$_COOKIE['admin_password']?>" type="password" class="form-control"
                            id="pro_price" name="admin_password" placeholder="Admin Password">
                </div>
            </div>
            <span><?php echo $p; ?></span>
        </div>

        <div class="row my-3">
            <div class="col-sm-3 col-md-4 col-lg-2 col-xl-5 mt-auto"></div>
            <div class="form-check align-center" style="padding-left: 50px">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
        </div>

        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-4 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button type="submit" name="admin_login" class="btn btn-primary btn-block">Login</button>
            </div>
        </div>
    </form>
</div>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>

