<?php
include 'connection.php';
$staff_id = $_GET['staff_id'];
$query=mysqli_query($conn,"SELECT * FROM `staff_details` WHERE staff_id='$staff_id'");
$data=mysqli_fetch_assoc($query);
if(isset($_POST['submit']))
{
    $staff_name = $_POST['staff_name'];
    $position = $_POST['position'];
    $time_shift = $_POST['time_shift'];
    $mobile_number = $_POST['mobile_number'];
    $sql = mysqli_query($conn,"UPDATE `staff_details` SET `staff_name`='$staff_name',`position`='$position',`time_shift`='$time_shift',`mobile_number`='$mobile_number' WHERE staff_id='$staff_id'");
    if($sql)
{
        echo'<script>alert("updated successfully");window.location.href="spviewstaff.php";</script>';
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
    <title>Document</title>
 <style>
    body {
        background-image: url('staff.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
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
                    <input type="text" class="form control mt-2" name="staff_name" value="<?php echo $data['staff_name'];?>">
                    <input type="text" class="form control mt-2" name="position" value="<?php echo $data['position'];?>">
                    <input type="datetime-local" class="form control mt-2" name="time_shift" value="<?php echo $data['time_shift'];?>">
                    <input type="mobile_number" class="form control mt-2" name="mobile_number" value="<?php echo $data['mobile_number'];?>">
                    <center><input type="submit" class="btn btn-success mt-2" name="submit" value="update"></center>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
