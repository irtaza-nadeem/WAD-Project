<?php
require_once "../server/db_connection.php";
session_start();
if(!isset($_SESSION['admin_user'])){
    header('location: index.php?not_admin=You are not Admin!');
}

if(isset($_POST['delete_r']))
{
    $res_i = $_POST['delete_r'];

    $delete_r = "delete from restaurants where id = '$res_i';";
    $delete_res = mysqli_query($con, $delete_r);

    if($delete_res)
    {
        header("location: ".$_SERVER['PHP_SELF']);
    }
}

/****************************************/
if(isset($_POST['edit_res']))
{
    $res_id = $_POST['edit_res'];
    $res_name = $_POST['res_name'];
    $res_address = $_POST['res_address'];
    $res_des = $_POST['res_des'];
    $res_keyword = $_POST['res_keyword'];
    $res_cat = $_POST['res_cat'];

    //getting image from the field
    $pro_image = $_FILES['res_image']['name'];
    $pro_image_tmp = $_FILES['res_image']['tmp_name'];
    move_uploaded_file($pro_image_tmp,"restaurant_images/$pro_image");

    $edit_restaurant = "update restaurants set name='$res_name', address='$res_address', description='$res_des', keywords='$res_keyword', 
category='$res_cat' where id='$res_id';";
    $edit_res = mysqli_query($con, $edit_restaurant);
    if($edit_res){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}


function showRestaurantData()
{
    global $con;
    $show_r = "select * from restaurants;";
    $show_res = mysqli_query($con, $show_r);

    while($row=mysqli_fetch_assoc($show_res)){
        $res_id = $row['id'];

        $res_name = $row['name'];
        $res_address = $row['address'];
        $res_description = $row['description'];
        $res_keyword = $row['keywords'];
        $res_category = $row['category'];
        $res_image = $row['image'];

        echo
        "
            <div class=\"row\">
                <div class=\"d-sm-1 col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editname\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> Name: </span></label>
                </div>
                <div class=\"col-sm- col-md-5 col-lg-4 col-xl-3\">
                    <textarea class=\"form-control\" type=\"file\" id=\"res_name\" name=\"res_name\"> $res_name </textarea>
                </div>
                
                <div class=\"d-sm-2 col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editaddress\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> Address: </span></label>
                </div>
                <div class=\"col-sm-8 col-md-5 col-lg-4 col-xl-3\">
                    <textarea class=\"form-control\" type=\"file\" id=\"res_address\" name=\"res_address\"> $res_address </textarea>
                </div>
                
                <div class=\"d-sm-2 col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editdes\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> Description: </span></label>
                </div>
                <div class=\"col-sm-8 col-md-5 col-lg-4 col-xl-3\">
                    <textarea class=\"form-control\" type=\"file\" id=\"res_des\" name=\"res_des\"> $res_description </textarea>
                </div>
                
                <br>
                
                <div class=\"d-sm-2 col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editkeyword\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> Keyword: </span></label>
                </div>
                <div class=\"col-sm-8 col-md-5 col-lg-4 col-xl-3\">
                    <textarea class=\"form-control\" type=\"file\" id=\"res_keyword\" name=\"res_keyword\"> $res_keyword </textarea>
                </div>
                
                <div class=\"d-sm-2 col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editdes\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> Category: </span></label>
                </div>
                <div class=\"col-sm-8 col-md-5 col-lg-4 col-xl-3\">
                    <textarea class=\"form-control\" type=\"file\" id=\"res_cat\" name=\"res_cat\"> $res_category </textarea>
                </div>
                
                <div class=\"d-sm-2 col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editimage\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> Image: </span></label>
                </div>
                <div class=\"col-sm-9 col-md-8 col-lg-4 col-xl-3 mt-3 mt-lg-0\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text\"><i class=\"far fa-image\"></i></div>
                        </div>
                        <input class=\"form-control\" type=\"file\" id=\"res_image\" name=\"res_image\">
                    </div>
                </div>
                
                <br>
                <div class=\"col-sm-12 col-md-6 col-lg-6 col-xl-6\">
                    <button type=\"submit\" value=\"$res_id\" name=\"edit_res\" class=\"btn btn-primary btn-block\">Edit</button>
                </div>
                <div class=\"col-sm-6 col-md-6 col-lg-6 col-xl-6\">
                    <button type=\"submit\" value=\"$res_id\" name=\"delete_r\" class=\"btn btn-danger btn-block\">Delete All Data of $res_name</button>
                </div>
            </div>
            <br><br>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit News</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
    <script type="javascript">
    </script>
</head>
<body>
<div class="container-fluid">
    <?php
    include 'logout.php';
    ?>
    <h1 class="text-center my-4"> <span class="d-none d-sm-inline"> Edit </span> Restaurant </h1>
    <form action="edit_restaurants.php" method="post" enctype="multipart/form-data">
        <?php showRestaurantData(); ?>
    </form>
</div>
</body>
</html>

