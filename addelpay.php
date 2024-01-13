<?php
include 'connection.php';
$payment_id = $_GET['delete_payment_id'];
// var_dump($payment_id);
// exit();
$sql = mysqli_query($conn,"DELETE FROM `payment` WHERE  `payment_id`='$payment_id'");
if($sql)
{
    echo'<script>alert("payment details deleted");window.location.href="index.php";</script>';
}
?>
