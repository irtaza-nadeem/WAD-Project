<?php
require_once "../server/db_connection.php";
session_start();
if(!isset($_SESSION['admin_user'])){
    header('location: index.php?not_admin=You are not Admin!');
}
else
{
    if(isset($_POST['insert_res']))
    {
        header("Location: insert_restaurant.php");
    }
    else if(isset($_POST['edit_res']))
    {
        header("Location: edit_restaurants.php");
    }
    else if(isset($_POST['insert_news']))
    {
        header("Location: insert_news.php");
    }
    else if(isset($_POST['edit_news']))
    {
        header("Location: edit_news.php");
    }
    else if(isset($_POST['insert_cat']))
    {
        header("Location: insert_category.php");
    }
    else if(isset($_POST['edit_cat']))
    {
        header("Location: edit_category.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
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
    <h1 class="text-center my-4"> <span class="d-none d-sm-inline"> Admin Menu </span> </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row my-3">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-auto" style="padding-bottom: 10px">
                <button type="submit" name="insert_news" class="btn btn-primary btn-block">Add News</button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <button type="submit" name="edit_news" class="btn btn-primary btn-block">Edit News</button>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-auto" style="padding-bottom: 10px">
                <button type="submit" name="insert_res" class="btn btn-primary btn-block">Add Restaurant</button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <button type="submit" name="edit_res" class="btn btn-primary btn-block">Edit Restaurant</button>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-auto" style="padding-bottom: 10px">
                <button type="submit" name="insert_cat" class="btn btn-primary btn-block">Add Restaurant Category</button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <button type="submit" name="edit_cat" class="btn btn-primary btn-block">Edit Restaurant Category</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>

