<?php
include 'connection.php';
session_start();
$sql=mysqli_query ($conn,"SELECT * FROM  `student_registration`");
if(isset($_POST['submit']))
{
    $parent_name=$_POST['parent_name'];
    $name=$_POST['name'];
    
    $_SESSION['stud_id']=$name;
    $place=$_POST['place'];
    $email_id=$_POST['email_id'];
    $mobile_number=$_POST['mobile_number'];
    $hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $sql=mysqli_query($conn,"INSERT INTO `parent_registration`( `parent_name`, `parent_of`, `place`,`email_id`,`mobile_number`) VALUES ('$parent_name','$name','$place','$email_id','$mobile_number')");
    $log=mysqli_insert_id($conn);
    $sql=mysqli_query($conn,"INSERT INTO `login`(`username`, `password`, `type`) VALUES ('$email_id','$hash','parent')");
    // $sql=mysqli_query($conn,"SELECT * FROM `parent_registration` WHERE email_id='$email_id'");
    // $row=mysqli_fetch_assoc($sql);
    // $_SESSION['stud_id']=$row('parent_of');
    

    if($sql)
    {
        echo '<script>alert("Registered successfully");window.location.href="login.php"</script>';
    }
    else
    {
        echo "Some thing went wrong";
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
    <form method="POST">
    <div class="mt-5">
  <div class="mb-3">
    <label class="form-label">Parent Name</label>
    <input type="text" required name="parent_name" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Parent of</label>
  <select class="form-control"  name="name" required>
    <option value="">Select</option>
    <?php
 while($row=mysqli_fetch_assoc($sql))
 {
 ?>
 <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
 <?php
 }
 ?>
 </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Place</label>
    <input type="text" required name="place" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile number</label>
    <input type="text" required name="mobile_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">email_id</label>
    <input type="email" required pattern=" /^[a-zA-Z0-9.! #$%&'*+/=? ^_`{|}~-]+@[a-zA-Z0-9-]+(?:\. [a-zA-Z0-9-]+)*$/" name="email_id" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" required  name="password" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
  </div>
 <center>
  <button type="submit" class="btn btn-primary" button click=validateform() name="submit">Submit</button></center>
 </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>