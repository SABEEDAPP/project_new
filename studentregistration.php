<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $_SESSION['student_id']=$id;  
    $name=$_POST['name'];
    $age=$_POST['age'];
    $class=$_POST['class'];
    $pic=$_POST['f1'];
    $email_id=$_POST['email_id'];
    $mobile_number=$_POST['mobile_number'];
    $hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $image=$_FILES['f1']['name'];
    if($image!="")
    {
       $filearray=pathinfo($_FILES['f1']['name']);
       $file1=rand();
       $file_ext=$filearray["extension"];
       $filenew=$file1.".".$file_ext;
       move_uploaded_file($_FILES['f1']['tmp_name'],"img/".$filenew);
    }   
    $log=mysqli_insert_id($conn);
    $sql=mysqli_query($conn,"INSERT INTO `student_registration`( `name`, `age`, `class`,`photo`,`email_id`, `mobile_number`) VALUES ('$name','$age','$class','$filenew','$email_id','$mobile_number')");
    $sql=mysqli_query($conn,"INSERT INTO `login`(`login_id`, `username`, `password`, `type`) VALUES ('$log','$email_id','$hash','student')");
    if($sql)
    {
        echo '<script>alert("Registered successfully");window.location.href="login.php"</script>';
    }
    else
    {
        echo "Some thing went wrong";
    }
    $query=mysqli_query($conn,"SELECT * FROM `booking_table` WHERE id='$name'");
          $q=mysqli_fetch_assoc($query);
          $a=$q['student_id'];
          $_SESSION['id']=$name;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .container {

        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: linear-gradient(to right, #ff8a00, #e52e71); 
    
      }
        
    body{
        background-size:cover;
        margin-left:auto;

    }
    .form-group {
      margin-bottom: 20px; 
    }
    .card {
      background-color: rgba(255, 255, 255, 0.5);
      border: none;
    }
</style>  
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
    <form method="POST" enctype="multipart/form-data">
    <div class="mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" required name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Age</label>
    <input type="number" required name="age" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Class</label>
    <input type="text" required name="class" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Photo</label>
    <input type="file" required id="image_id" name="f1"  placeholder="image">
  </div>
  <div class="mb-3">
    <label class="form-label">email_id</label>
    <input type="email" required name="email_id" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile Number</label>
    <input type="number" required name="mobile_number" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" required name="password" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
  </div>
 <center>
  <button type="submit" class="btn btn-primary" button click=validateform() name="submit">Submit</button></center>
 </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>