<?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $place=$_POST['place'];
  $no_of_rooms=$_POST['no_of_rooms'];
  $no_of_beds=$_POST['no_of_beds'];
  $hostel_photo=$_POST['hostel_photo'];

$sql=mysqli_query($conn,"INSERT INTO `hostel_table`( `name`, `place`, `no_of_rooms`, `no_of_beds`, `hostel_photo`) VALUES ('$name','$place','$no_of_rooms','$no_of_beds','$hostel_photo')");
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
              <label for="formGroupExampleInput" class="form-label">Enter name</label>
              <input type="text" name="name"class="form-control" id="formGroupExampleInput" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Enter Place</label>
              <input type="text" name="place" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">No.of Rooms</label>
              <input type="number" name="no_of_rooms" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">No.of Beds</label>
              <input type="number" name="no_of_beds" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Hostel Photo</label>
              <input type="file" name="hostel_photo" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>  
            <button type="submit" class="btn btn-primary" name="submit">submit</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
