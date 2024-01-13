
<?php
include 'connection.php';
$staff_id = $_GET['staff_id'];

$query = mysqli_query($conn, "SELECT * FROM `staff_details` WHERE staff_id='$staff_id'");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['submit'])) {
    $name = $_POST['staff_name'];
    $position = $_POST['position'];
    $from_time = $_POST['from_time'];
    $to_time = $_POST['to_time'];
    $mobile_number = $_POST['mobile_number'];

    $sql = mysqli_query($conn, "UPDATE `staff_details` SET `staff_name`='$name', `position`='$position', `from_time`='$from_time',`to_time`='$to_time', `mobile_number`='$mobile_number' WHERE `staff_id`='$staff_id'");
    
    if ($sql) {
        echo '<script>alert("Updated successfully");window.location.href="adeditstaff.php";</script>';
    } else {
        echo "Something went wrong";
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
  <div class="container">
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4 mt-5" style="background-color: bisque">
                <h5>Edit your details here</h5>

                <form method="POST">
                    <div class="form-group mt-5">
                        <input type="text" class="form-control mt-2" name="staff_name" value="<?php echo $data['staff_name']; ?>">
                        <input type="text" class="form-control mt-2" name="position" value="<?php echo $data['position']; ?>">
                        <input type="time" class="form-control mt-2" name="from_time" value="<?php echo $data['from_time']; ?>">
                        <input type="time" class="form-control mt-2" name="to_time" value="<?php echo $data['to_time']; ?>">
                        <input type="number" class="form-control mt-2" name="mobile_number" value="<?php echo $data['mobile_number']; ?>">
                        <center><input type="submit" class="btn btn-success mt-2" name="submit" value="Update"></center>
                    </div>
                </form>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">  </h1>
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


