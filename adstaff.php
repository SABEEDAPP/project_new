<?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $staff_name=$_POST['staff_name'];
  $position=$_POST['position'];
  $from_time=$_POST['from_time'];
  // var_dump($from_time);
  // exit();
  $to_time =$_POST['to_time'];
  $mobile_number=$_POST['mobile_number'];


$sql=mysqli_query($conn," INSERT INTO `staff_details`( `staff_name`, `position`, `from_time`,`to_time`, `mobile_number`) VALUES ('$staff_name','$position','$from_time','$to_time','$mobile_number')");
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
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
<script>
  function validateform()
  {
    var staff_name=documennt.myform.staff_name.value.
    var position=documennt.myform.position.value.
    var from_time=documennt.myform.from_time.value.
    var to_time=documennt.myform.to_time.value.
    var mobile_number=documennt.myform.mobile_number.value;
    if(staff_name==null||staff_name=="")
    {
      alert("Name can't be blank");
      return false;
    }
    if(position==null||position=="")
    {
      alert("Position can't be blank");
      return false;
    }
    if(from_time==null||from_time=="")
    {
      alert("from time can't be blank");
      return false;
    }
    if(to_time==null||to_time=="")
    {
      alert("to time can't be blank");
      return false;
    }
    if(mobile_number==null||mobile_number=="")
    {
      alert("mobile number can't be blank");
      return false;
    }
    
 }
</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <?php 
  include 'navbar.php'
  ?>

     

  <!-- Main Sidebar Container -->
 
<?php 
include 'sidebar.php'
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-12">
            <h1 class="m-0">  </h1>
            <div class="container">
      <div class="row">
        <div class="col-4 marg">
          <form name="myform" method="POST">
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Enter Staff Name</label>
              <input type="text" required name="staff_name"class="form-control" id="formGroupExampleInput" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Position of Staff</label>
              <input type="text" required name="position" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">From Time</label>
              <input type="time"required name="from_time" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">To Time</label>
              <input type="time" required name="to_time" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Mobile Number</label>
              <input type="number" required name="mobile_number" class="form-control" id="formGroupExampleInput2" placeholder=" ">
            </div> 
            <button type="submit" button click=validateform()  class="btn btn-primary" name="submit">submit</button>
          </form>
        </div>
      </div>
    </div>
          </div><!-- /.col -->
          <div class="col-sm-6"> 
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
           </div>
                <!-- /. tools -->
              </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!--  -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

