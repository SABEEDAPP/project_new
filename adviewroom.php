<?php
include 'connection.php';
$query=mysqli_query($conn,"SELECT * FROM hostel_table");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Room</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class=col-4 mt-5>
            <table class="table table-boredred table-striped bg-info text-light">
                <tr>
                    <th>name</th>
                    <th>place</th>
                    <th>no_of_rooms</th>
                    <th>no_of_beds</th>
                </tr>
            <?php
            while($row=mysqli_fetch_assoc($query)){
            ?>
            <tr> 
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['place'];?></td>
                <td><?php echo $row['no_of_rooms'];?></td>
                <td><?php echo $row['no_of_beds'];?></td>
            </tr>
            <?php
            }
            ?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> 
</body>
</html>
