<?php
require_once "../server/db_connection.php";

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
if(isset($_POST['edit_n']))
{
    $news_id = $_POST['edit_n'];
    $latest_news = $_POST['edit_news'];

    $edit_n = "update news set news='$latest_news' where id='$news_id';";
    $edit_news = mysqli_query($con, $edit_n);

    if($edit_news)
    {
        header("location: ".$_SERVER['PHP_SELF']);
    }
}
/****************************************/

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
                <div class=\"d-sm-2 col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editname\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> Name: </span></label>
                </div>
                <div class=\"col-sm-8 col-md-5 col-lg-4 col-xl-4\">
                    <textarea class=\"form-control\" type=\"file\" id=\"res_name\" name=\"res_name\"> $res_name </textarea>
                </div>
                <div class=\"col-sm-2 col-md-5 col-lg-1 col-xl-1\">
                    <button type=\"submit\" value=\"$res_id\" name=\"edit_name\" class=\"btn btn-primary btn-block\">Edit</button>
                </div>
                
                <div class=\"d-sm-2 col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editaddress\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> Address: </span></label>
                </div>
                <div class=\"col-sm-8 col-md-5 col-lg-4 col-xl-4\">
                    <textarea class=\"form-control\" type=\"file\" id=\"res_address\" name=\"res_address\"> $res_address </textarea>
                </div>
                <div class=\"col-sm-2 col-md-5 col-lg-1 col-xl-1\">
                    <button type=\"submit\" value=\"$res_id\" name=\"edit_address\" class=\"btn btn-primary btn-block\">Edit</button>
                </div>
                
                <div class=\"d-sm-2 col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editdes\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> Description: </span></label>
                </div>
                <div class=\"col-sm-8 col-md-5 col-lg-4 col-xl-4\">
                    <textarea class=\"form-control\" type=\"file\" id=\"res_des\" name=\"res_des\"> $res_description </textarea>
                </div>
                <div class=\"col-sm-2 col-md-5 col-lg-1 col-xl-1\">
                    <button type=\"submit\" value=\"$res_id\" name=\"edit_des\" class=\"btn btn-primary btn-block\">Edit</button>
                </div>
                
                <div class=\"d-sm-2 col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editkeyword\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> Keyword: </span></label>
                </div>
                <div class=\"col-sm-8 col-md-5 col-lg-4 col-xl-4\">
                    <textarea class=\"form-control\" type=\"file\" id=\"res_keyword\" name=\"res_keyword\"> $res_keyword </textarea>
                </div>
                <div class=\"col-sm-2 col-md-5 col-lg-1 col-xl-1\">
                    <button type=\"submit\" value=\"$res_id\" name=\"edit_keyword\" class=\"btn btn-primary btn-block\">Edit</button>
                </div>
                
                <div class=\"d-sm-2 col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editdes\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> Description: </span></label>
                </div>
                <div class=\"col-sm-8 col-md-5 col-lg-4 col-xl-4\">
                    <textarea class=\"form-control\" type=\"file\" id=\"res_cat\" name=\"res_cat\"> $res_category </textarea>
                </div>
                <div class=\"col-sm-2 col-md-5 col-lg-1 col-xl-1\">
                    <button type=\"submit\" value=\"$res_id\" name=\"edit_cat\" class=\"btn btn-primary btn-block\">Edit</button>
                </div>
                
                <div class=\"d-sm-2 col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editimage\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> Image: </span></label>
                </div>
                <div class=\"col-sm-8 col-md-5 col-lg-4 col-xl-4\">
                    <textarea class=\"form-control\" type=\"file\" id=\"res_image\" name=\"res_image\"> $res_image </textarea>
                </div>
                <div class=\"col-sm-2 col-md-5 col-lg-1 col-xl-1\">
                    <button type=\"submit\" value=\"$res_id\" name=\"edit_image\" class=\"btn btn-primary btn-block\">Edit</button>
                </div>
                
                <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                    <button type=\"submit\" value=\"$res_id\" name=\"delete_r\" class=\"btn btn-danger btn-block\">Delete All Data of $res_name</button>
                </div>
            </div>
            <br>
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
    <h1 class="text-center my-4"> <span class="d-none d-sm-inline"> Edit </span> Restaurant </h1>
    <form action="edit_restaurants.php" method="post" enctype="multipart/form-data">
        <?php showRestaurantData(); ?>
    </form>
</div>
</body>
</html>

