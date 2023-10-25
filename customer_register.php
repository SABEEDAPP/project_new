<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $place=$_POST['place'];
    $email=$_POST['email'];
    $sql=mysqli_query($conn,INSERT INTO `student`( `name`, `class`, `division`, `place`, `mark`, `father`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]'));


}
?>