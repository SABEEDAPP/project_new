<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $parent_id=$_POST['parent_id'];
    $student_id=$_POST['student_id'];
    $amount=$_POST['amount'];
    $type=$_POST['type'];
    $user_name=$_POST['user_name'];
    $payment_status=$_POST['payment_status'];
   
    $sql=mysqli_query($conn,"INSERT INTO `payment`(`parent_id`, `student_id`, `amount`, `type`, `user_name`, `payment_status`) VALUES ('$parent_id','$student_id','$amount','$type','$user_name','$payment_status')");
    $log=mysqli_insert_id($conn);
    if($sql)
    {
        echo '<script>alert("data inserted");window.location.href=" "</script>';
    }
    else
    {
        echo "Some thing went wrong";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Payment Form</title>
  <style>
    /* Form container */
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #f2f2f2;
    }

    /* Form fields */
    .form-group {
      margin-bottom: 10px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    .form-group input[type="text"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    /* Payment button */
    .btn-payment {
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
    .btn-payment:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <center><h2>Payment Form</h2></center>
  <div class="form-container">
    <form id="payment-form">
      <div class="form-group">
        <label for="payment_id">Payment ID:</label>
        <input type="text" id="payment_id" name="payment_id" required>
      </div>
      <div class="form-group">
        <label for="parent_id">Parent ID:</label>
        <input type="text" id="parent_id" name="parent_id" required>
      </div>
      <div class="form-group">
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" required>
      </div>
      <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" required>
      </div>
      <div class="form-group">
        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required>
      </div>
      <div class="form-group">
        <label for="user_name">User Name:</label>
        <input type="text" id="user_name" name="user_name" required>
      </div>
      <div class="form-group">
        <label for="payment_status">Payment Status:</label>
        <input type="text" id="payment_status" name="payment_status" required>
      </div>
      <button type="submit" class="btn-payment">Make Payment</button>
    </form>
  </div>

  <script>
    document.getElementById("payment-form").addEventListener("submit", function(event))
     
      event.preventDefault(); // Prevent form submission

      // Get form data
      var formData = new FormData(this);
      var paymentData = {};
      for (var pair of formData.entries()) {
        paymentData[pair[0]] = pair[1];
      }

      // Send the payment data to the server or perform necessary actions
      console.log(paymentData); // Example: log the data to the console

      // Optionally, you can redirect the user to a payment gateway or process the payment here

  </script>
</body>
</html>
