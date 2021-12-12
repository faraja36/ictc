<?php
    $server="localhost";
    $db="ggcakes";
    $host="root";
    $pwd="";
    $con=mysqli_connect("$server","$host","$pwd");
    mysqli_query($con, "CREATE DATABASE $db");
    $mysqli= new mysqli("$server","$host","$pwd","$db");
    $yes=mysqli_select_db($con, "$db");
    if(!$yes){
     echo"Not connected";
    }
?>
