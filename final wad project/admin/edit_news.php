<?php
require_once "../server/db_connection.php";

if(isset($_POST['delete_n']))
{
    $news_i = $_POST['delete_n'];

    $delete_n = "delete from news where id = '$news_i';";
    $delete_news = mysqli_query($con, $delete_n);

    if($delete_news)
    {
        header("location: ".$_SERVER['PHP_SELF']);
    }
}
if(isset($_POST['edit_n']))
{
    $news_id = $_POST['edit_n'];
    $latest_news = $_POST['edit_news'];

    $news_i = $_POST['delete_n'];

    $edit_n = "update news set news='$latest_news' where id='$news_id';";
    $edit_news = mysqli_query($con, $edit_n);

    if($edit_news)
    {
        header("location: ".$_SERVER['PHP_SELF']);
    }
}

function showNews()
{
    global $con;
    $show_n = "select * from news;";
    $show_news = mysqli_query($con, $show_n);

    while($row=mysqli_fetch_assoc($show_news)){
        $news_id = $row['id'];
        $news = $row['news'];
        echo
        "
            <div class='row'>
                <div class=\"d-sm-block col-md-2 col-lg-1 col-xl-1\">
                    <label for=\"editnews\" class=\"float-md-right\"> <span class=\"d-sm-none d-md-inline\"> News: </span></label>
                </div>
                
                <div class=\"col-sm-12 col-md-8 col-lg-8 col-xl-8\">
                    <textarea class=\"form-control\" type=\"file\" id=\"edit_news\" name=\"edit_news\">$news</textarea>
                </div>
                
                <div class=\"col-sm-1 col-md-1 col-lg-1 col-xl-1\">
                    <button type=\"submit\" value=\"$news_id\" name=\"edit_n\" class=\"btn btn-primary btn-block\">Edit</button>
                </div>
                
                <div class=\"col-sm-1 col-md-1 col-lg-1 col-xl-1\">
                    <button type=\"submit\" value=\"$news_id\" name=\"delete_n\" class=\"btn btn-danger btn-block\">Delete</button>
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
    <h1 class="text-center my-4"> <span class="d-none d-sm-inline"> Edit </span> News </h1>
    <form action="edit_news.php" method="post" enctype="multipart/form-data">
            <?php showNews(); ?>
    </form>
</div>
</body>
</html>

