<?php
include 'connection.php';
session_start();
$parent_of=$_SESSION['parent_of'];
// var_dump($parent_of);
// exit();
$sql=mysqli_query($conn,"SELECT * FROM `student_registration`  WHERE `id`='$parent_of'" );
$a=mysqli_fetch_assoc($sql);
if(isset($_POST['submit']))
{
  $student_id=$_POST['student_id'];
  $from_date=$_POST['from_date'];
  $to_date=$_POST['to_date'];
  

$sql=mysqli_query($conn,"INSERT INTO `booking_table`(`student_id`,`status`,`from_date`, `to_date`) VALUES ('$student_id','pending','$from_date','$to_date')");
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
           
           
            <!-- /.card -->            

          </div>
</div>
                       
            
  <!-- /.content-wrapper -->
  <div class="container">
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4 mt-5">
      <form method="POST">
      <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Student ID</label>
              <input type="text" required name="student_id" value='<?php echo $a['id']; ?>' class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>  
          <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Student Name</label>
              <input type="text" required name="student_name" value='<?php echo $a['name']; ?>' class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>                                      
          <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">From Date</label>
              <input type="datetime-local" required name="from_date" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">To Date</label>
              <input type="datetime-local" required name="to_date" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>
            <button type="submit" class="btn btn-primary"  name="submit">submit</button>
          </form>
      </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
      integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  
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




       
        