<!-- <?php
include 'connection.php';
$booking_id = $_GET['booking_id'];
// var_dump($staff_id);
// exit();
$sql = mysqli_query($conn,"DELETE FROM `booking_table` WHERE  `booking_id`='$booking_id'");
if($sql)
{
    echo'<script>alert("booking details rejected");window.location.href="index.php";</script>';
}
?> -->
<?php
include 'connection.php';
$booking_id = $_GET['booking_id'];
    $sql = mysqli_query($conn,"UPDATE `booking_table` SET `status`='reject' WHERE booking_id='$booking_id'");
    if($sql)
{
        echo'<script>alert("Rejected successfully");window.location.href="index.php";</script>';
}
    else
{
        echo "something went wrong";
}
?>


