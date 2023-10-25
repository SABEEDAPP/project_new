 <?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];


$sql=mysqli_query($conn,"INSERT INTO `feedback`(`name`, `email`, `message`) VALUES ('$name','$email','$message')");
if($sql)
{
  echo '<script>alert("Registered Successfully");
  window.location.href("spcreatefeedback.php");</script>';
}
else
{
  echo 'something went wrong';
}
}
?>

!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
      .card {
        background-color: #f8f9fa;
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
                  <label for="name" class="form-label">Enter Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder=" ">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Enter Email</label>
                  <input type="text" name="email" class="form-control" id="email" placeholder=" ">
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Enter Feedback</label>
                  <input type="text" name="message" class="form-control" id="message" placeholder=" ">
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
