<?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $notification=$_POST['notification'];


$sql=mysqli_query($conn,"INSERT INTO `notification`( `notification`) VALUES ('$notification')");
if($sql)
{
  echo '<script>alert("Registered Successfully");
  window.location.href("adcreatenoti.php");</script>';
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
    <title>Feedback Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
      .card {
        background-color: #909099;
      }

      .card-header {
        background-color: #17a2b8;
        color: #fff;
      }

      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-6 mt-5">
          <div class="card">
            <div class="card-header text-center">
              <h5 class="card-title">Feedback Form</h5>
            </div>
            <div class="card-body">
              <form method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Notification</label>
                  <input type="text" name="notification" class="form-control" id="notification" placeholder=" ">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
