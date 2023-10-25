<?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $staff_name=$_POST['staff_name'];
  $position=$_POST['position'];
  $time_shift =$_POST['time_shift'];
  $mobile_number=$_POST['mobile_number'];


$sql=mysqli_query($conn," INSERT INTO `staff_details`( `staff_name`, `position`, `time_shift`, `mobile_number`) VALUES ('$staff_name','$position','$time_shift','$mobile_number')");
if($sql)
{
  echo '<script>alert("Registered Successfully");
  window.location.href("stdashboard.php");</script>';
}
else
{
  echo 'something went wrong';
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-4 marg">
          <form method="POST">
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Enter Staff Name</label>
              <input type="text" name="staff_name"class="form-control" id="formGroupExampleInput" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Position of Staff</label>
              <input type="text" name="position" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Time Shift</label>
              <input type="datetime-local" name="time_shift" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Mobile Number</label>
              <input type="number" name="mobile_number" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div> 
            <button type="submit" class="btn btn-primary" name="submit">submit</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
