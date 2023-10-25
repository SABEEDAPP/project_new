<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Set session variable,
$_SESSION["username"]="anu@gmail.com";
$_SESSION["password"]="anu@123";
echo var_dump($_SESSION["username"]);
?>
    
</body>
</html>