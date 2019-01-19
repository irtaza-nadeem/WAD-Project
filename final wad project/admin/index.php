<?php
require_once "../server/db_connection.php";
$username = "root";
$password = "root";
$u = "";
$p = "";

if(isset($_POST['insert_pro']))
{
    $u = "";
    $p = "";
    $user = $_POST['admin_user'];
    $pass = $_POST['admin_password'];

    if(empty(trim($user)))
    {
        $u = "<b>Username Required</b>";
    }
    if(empty(trim($pass)))
    {
        $p = "<b>Password Required</b>";
    }

    if((strcmp($username, $user) == 0) && (strcmp($password, $pass) == 0))
    {
        header("Location: menu.php");
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
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-4 mt-auto">
                <label for="admin_username" class="float-md-right"> <span class="d-sm-none d-md-inline"> Username: </span></label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <input type="text" class="form-control" id="pro_title" name="admin_user" placeholder="Admin Username">
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
                    <input class="form-control" id="pro_price" name="admin_password" placeholder="Admin Password">
                </div>
            </div>
            <span><?php echo $p; ?></span>
        </div>

        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-4 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button type="submit" name="insert_pro" class="btn btn-primary btn-block">Login</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>

