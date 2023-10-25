<?php
include 'connection.php';
$food_id = $_GET['food_id'];
$query=mysqli_query($conn,"SELECT * FROM `food_menu` WHERE food_id='$food_id'");
$data=mysqli_fetch_assoc($query);
if(isset($_POST['submit']))
{
    $user_name = $_POST['user_name'];
    $date = $_POST['date'];
    $break_fast = $_POST['break_fast'];
    $lunch = $_POST['lunch'];
    $dinner = $_POST['dinner'];
    $sql = mysqli_query($conn,"UPDATE `food_menu` SET `user_name`='$user_name',`date`='$date',`break_fast`='$break_fast',`lunch`='$lunch',`dinner`='$dinner' WHERE food_id='$food_id'");
    if($sql)
{
        echo'<script>alert("updated successfully");window.location.href="adviewfood.php";</script>';
}
    else
{
        echo "something went wrong";
}
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Edit Food Details in Hostel</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4 mt-5" style="background-color:bisque"></div>
            <h5>Edit your details here</h5>

            <form method="POST">
                <div class="form-group mt-5">
                    <input type="text" class="form control mt-2" name="user_name" value="<?php echo $data['user_name'];?>">
                    <input type="datetime-local" class="form control mt-2" name="date" value="<?php echo $data['date'];?>">
                    <input type="text" class="form control mt-2" name="break_fast" value="<?php echo $data['break_fast'];?>">
                    <input type="text" class="form control mt-2" name="lunch" value="<?php echo $data['lunch'];?>">
                    <input type="text" class="form control mt-2" name="dinner" value="<?php echo $data['dinner'];?>">
                    <center><input type="submit" class="btn btn-success mt-2" name="submit" value="update"></center>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


