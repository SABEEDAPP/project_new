<?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $date=$_POST['date'];
  $break_fast=$_POST['break_fast'];
  $lunch=$_POST['lunch'];
  $dinner=$_POST['dinner'];

$sql=mysqli_query($conn," INSERT INTO `food_menu`( `user_name`, `date`, `break_fast`, `lunch`, `dinner`) VALUES ('$username','$date','$break_fast','$lunch','$dinner')");
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
              <label for="formGroupExampleInput" class="form-label">Enter user name</label>
              <input type="text" name="username"class="form-control" id="formGroupExampleInput" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Enter Date</label>
              <input type="datetime-local" name="date" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">BreakFast</label>
              <input type="text" name="break_fast" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Lunch</label>
              <input type="text" name="lunch" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Dinner</label>
              <input type="text" name="dinner" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>  
            <button type="submit" class="btn btn-primary" name="submit">submit</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
