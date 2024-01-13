
<?php
include 'connection.php';
$sql=mysqli_query($conn,"SELECT * FROM student_registration INNER JOIN payment ON student_registration.id = payment.stud_id;");
$data = mysqli_fetch_assoc($sql);

// if (isset($_POST['submit'])) {
//     $amount = $_POST['amount'];
//     $type = $_POST['type'];
//     $stud_id = $_POST['stud_id'];
//     $payment_status = $_POST['payment_status'];
//     $sql = mysqli_query($conn, "UPDATE `payment` SET `amount`='$amount', `type`='$type', `stud_id`='$stud_id', `payment_status`='$payment_status' WHERE `payment_id`='$payment_id'");
//     if ($sql) {
//         echo '<script>alert("Payment Updated successfully");window.location.href="adeditpay.php";</script>';
//     } else {
//         echo "Something went wrong";
//     }
// }
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
  <style>
   table,th,td,tr
    {
     border: 2px solid white; 
     border-collapse:collapse;

    }
    table
    {
      width: 75%;
    }
  </style>
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
          
            <div class="col-12" style="background-color:lightblue; margin: 30px">
              
<div>
                <center>
                <table  style="width=25%;margin: 20px" >
                  <thead>
                    <tr>
                      <th>Amount</th>
                      <th>Type</th>
                      <th>Student Name</th>
                      <th>Payment Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
            while($row=mysqli_fetch_assoc($sql)){
            ?>
            <tr>
                <!-- <?php echo $row['payment_date'];?>  -->
                <td><?php echo $row['amount'];?></td>
                <td><?php echo $row['type'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['payment_status'];?></td>
               <td><a href="readpayment.php?payment_id=<?php echo $row['payment_id'];?>"class="btn btn-primary">Edit</a></td>
               <td><a href="addelpay.php?delete_payment_id=<?php echo $row['payment_id'];?>"class="btn btn-danger">Delete</a></td>
            </tr>
            <?php
            }
            ?>
                  </tbody>
                </table>
          </center>
          </div>
          <!-- <form method="POST">
                    <div class="form-group mt-5">
                        <input type="number" class="form-control mt-2" name="amount" value="<?php echo $data['amount']; ?>">
                        <input type="text" class="form-control mt-2" name="type" value="<?php echo $data['type']; ?>">
                        <input type="text" class="form-control mt-2" name="user_name" value="<?php echo $data['user_name']; ?>">
                        <input type="text" class="form-control mt-2" name="payment_status" value="<?php echo $data['payment_status']; ?>">
                        <center><input type="submit" class="btn btn-success mt-2" name="submit" value="Update"></center>
                    </div>
                </form> -->
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


