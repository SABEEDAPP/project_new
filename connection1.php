<?php
$con=new mysqli("localhost","root","","student")or
die("connection failed");
$re=$con->query("select * from student");
if($res==false){
    die("query error");
}
else{
    var_dump($res->dba_fetch);
}


?>