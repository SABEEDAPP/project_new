<?php
include 'connection.php';
session_start();
$parent_id=$_SESSION['pid'];
$sql=mysqli_query($conn,"SELECT * FROM `parent_registration`  WHERE `parent_id`='$parent_id'" );
$a=mysqli_fetch_assoc($sql);

$parent_id=$a['email'];

if(isset($_POST['submit']))
{
  $email=$_POST['email'];
  $message=$_POST['message'];


$sql=mysqli_query($conn,"INSERT INTO `feedback`( `email`, `message`) VALUES ('$email','$message')");
if($sql)
{
  echo '<script>alert("Feedback  Submitted");
  window.location.href("parfeedback.php");</script>';
}
else
{
  echo 'something went wrong';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

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
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
 

  <?php
  include 'parnavbar.php';
  ?>

   
<?php
include 'parsidebar.php';
?>
  <div class="row">
          <!-- Left col -->
      <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            <div class="card">
             
              <!-- /.card-body -->
            </div>
            <!-- /.card -->            

          </div>
</div>
                       
            
  <!-- /.content-wrapper -->
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
                  <label for="email" class="form-label">Enter Email</label>
                  <input type="text" name="email" value='<?php echo $a['email_id']; ?>' class="form-control" id="formGroupExampleInput2" placeholder=" ">
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
  
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>


