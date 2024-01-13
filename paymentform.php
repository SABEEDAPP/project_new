<?php
include 'connection.php';
session_start();
$stud_id=$_SESSION['parent_of'];
if(isset($_POST['submit']))
{
    $amount=$_POST['amount'];
    $type=$_POST['type'];
    $payment_status=$_POST['payment_status'];
   
    $sql=mysqli_query($conn,"INSERT INTO `payment`( `amount`, `type`, `payment_status`,`stud_id`) VALUES ('$amount','$type','$payment_status','$stud_id')");
    $log=mysqli_insert_id($conn);
    if($sql)
    {
        echo '<script>alert("Payment Completed");window.location.href=" "</script>';
    }
    else
    {
        echo "Some thing went wrong";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
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

  Preloader
 

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
      <div class="row justify-content-center">
        <div class="col-6 mt-5">
          <div class="card">
            <div class="card-header text-center">
              <h5 class="card-title">Payment Form</h5>
            </div>
            <div class="card-body">
              <form method="POST">
                <div class="mb-3">
                  <label for="amount" class="form-label">Enter Amount </label>
                  <input type="number" name="amount" class="form-control" id="amount" placeholder=" ">
                </div>
                <div class="mb-3">
                  <label for="type" class="form-label">Enter Type</label>
                  <input type="text" name="type" class="form-control" id="type" placeholder=" ">
                </div>
               
                <div class="mb-3">
                  <label for="payment_status" class="form-label">Enter Payment Status</label>
                  <input type="text" name="payment_status" class="form-control" id="payment_status" placeholder=" ">
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


