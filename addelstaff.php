<?php
include 'connection.php';
$staff_id = $_GET['delete_staff_id'];
$sql = mysqli_query($conn,"DELETE FROM `staff_details` WHERE  staff_id='$staff_id'");
if($sql)
{
    echo'<script>alert("staff details deleted");window.location.href="adviewfood.php";</script>';
}
?>
