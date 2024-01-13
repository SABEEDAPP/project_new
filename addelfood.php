<?php
include 'connection.php';
$food_id = $_GET['delete_food_id'];
// var_dump($staff_id);
// exit();
$sql = mysqli_query($conn,"DELETE FROM `food_menu` WHERE  `food_id`='$food_id'");
if($sql)
{
    echo'<script>alert("food menu deleted");window.location.href="index.php";</script>';
}
?>
