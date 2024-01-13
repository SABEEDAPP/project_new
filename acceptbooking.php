<?php
include 'connection.php';
$booking_id = $_GET['booking_id'];
    $sql = mysqli_query($conn,"UPDATE `booking_table` SET `status`='approve' WHERE booking_id='$booking_id'");
    if($sql)
{
        echo'<script>alert("updated successfully");window.location.href="index.php";</script>';
}
    else
{
        echo "something went wrong";
}
?>


