<?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $result=mysqli_query($conn,"SELECT * FROM `login` WHERE username='$username'");
    if($result)
    {
    $row = mysqli_fetch_assoc($result);
    $hash = password_verify($password,$row['password']);
    echo var_dump($hash);
    $count = mysqli_num_rows($result);
    $type = $row['type'];
      if($count==1 && $type=="admin" && $hash)
       {
            $_SESSION['id'] = $row['login_id'];
            $_SESSION['username'] = $row['username'];
            // $id = $_SESSION['id'];
         ?>
          <script>window.location.href="index.php";</script>
          <?php
       }
        
        elseif($count==1 && $type="student" && $hash)
        {
          $_SESSION['id']=$row['login_id'];
          $id=$_SESSION['id'];
          $query=mysqli_query($conn,"SELECT * FROM `student_registration` WHERE id='$id'");
          $q=mysqli_fetch_assoc($query);
          if($q['approval_status']==1)
          {
            ?>
            <script>window.location.href="stdashboard.php"</script>
            <?php
          }
        }
        elseif($count==1 && $type="parent" && $hash)
        {
          $_SESSION['id']=$row['login_id'];
          $id=$_SESSION['id'];
          $query=mysqli_query($conn,"SELECT * FROM `parent_registration` WHERE id='$id'");
          $q=mysqli_fetch_assoc($query);
          if($q['approval_status']==1)
          {
            ?>
            <script>window.location.href="parentdashboard.php"</script>
            <?php
          }
        
        else
           {
            echo "invalid username and password";
          }
        }
      }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
        .container {

        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
        
    body{
        background-image:url("campus1.jpg");
        background-size:cover;
        margin-left:auto;

    }
    .form-group {
      margin-bottom: 20px; 
    }
    .card {
       background-color:grey;
      border: none;
    }
</style>  
</head>
  <body>
  <div class="container">
    <div class="card text-center">
    <div class="card-body">
      <h5 class="card-tittle">Login</h5>
    <form method="POST" required>
    <div class="form-group">
    <label class="form-label">username</label>
    <input type="text" name="username" class="form-control">
  </div>
  <div class="form-group">
    <label class="form-label">password</label>
    <input type="password" name="password" class="form-control">
  </div>
  <button type="submit"  class="btn btn-primary" name="submit">Login</button>
  <a href="studentregistration.php" class="btn btn-primary">Student </a>
  <a href="parentregistration.php" class="btn btn-primary">Parent </a>
  </form>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>

</div>

</html>


