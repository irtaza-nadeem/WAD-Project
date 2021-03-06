<?php
require_once "../server/db_connection.php";
session_start();
if(!isset($_SESSION['admin_user'])){
    header('location: index.php?not_admin=You are not Admin!');
}

if(isset($_POST['insert_cat']))
{
    $c_title = $_POST['cat_title'];

    $insert_category = "insert into categories (title) VALUES ('$c_title');";
    $insert_cat = mysqli_query($con, $insert_category);
    if($insert_cat){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Category</title>
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
    <?php
    include 'logout.php';
    ?>
    <h1 class="text-center my-4"> <span class="d-none d-sm-inline"> Add </span> Category </h1>
    <form action="insert_category.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-4 mt-auto">
                <label for="admin_username" class="float-md-right"> <span class="d-sm-none d-md-inline"> Category: </span></label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <input type="text" class="form-control" id="cat_title" name="cat_title" placeholder="Enter Category">
                </div>
            </div>
        </div>

        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-4 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button type="submit" name="insert_cat" class="btn btn-primary btn-block">Add Category</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>

