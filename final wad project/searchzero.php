<?php
require "server/functions.php";

$user_query = $_REQUEST["e"];
$getProQuery = "select * from restaurants";
$getProResult = mysqli_query($con,$getProQuery);
$count_pro = mysqli_num_rows($getProResult);
if($count_pro==0)
{
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