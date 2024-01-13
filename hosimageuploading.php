<?php
include 'connection.php';

if(isset($_POST['submit']))
{
 $hostel_id=$_POST['hostel_id'];
 $image=$_FILES['f1']['name'];
 if($image!="")
 {
    $filearray=pathinfo($_FILES['f1']['name']);
    $file1=rand();
    $file_ext=$filearray["extension"];
    $filenew=$file1.".".$file_ext;
    move_uploaded_file($_FILES['f1']['tmp_name'],"img/".$filenew);

 }   
 else
 {
    echo "<script>alert('please try again')</script>";
 }
 
 mysqli_query($conn,"UPDATE  `hostel_table` SET `hostel_image`='$filenew' WHERE hostel_id='$hostel_id' ");
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-12">
            <h1 class="m-0">  </h1>
            <div class="container">
      <div class="row">
        <div class="col-4 marg">
          <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
    <label class="form-label">Hostel ID</label>
    <input type="text" required pattern="^[1-9][0-9]?$|^100$" name="hostel_id" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
  </div>
    <div class="mb-3">
    <label class="form-label">Room Number</label>
    <input type="text" required pattern="^[1-9][0-9]?$|^100$"  name="room_number" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
  </div>
      <div class="mb-3">
          <input type="file" required pattern="([^\\s]+(\\.(?i)(jpe?g|png|gif|bmp))$)0ih" id="image_id" name="f1" placeholder="image">
</div>
        <button button click=validateform() name="submit">Submit</button>
        <a href="imageadding.php">View</a>
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



    

 
