<?php
setcookie ("user", "anu", time ()+(86400*30),"/");
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
    if(!isset($_COOKIE["user"]))
    {
    echo "Sorry, cookie is not found!";
    }else{
    echo "<br/>Cookie Value:" . $_COOKIE["user"];
    }
    
    ?>
</body>
</html>