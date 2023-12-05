<?php

    $user="root";
    $pass="";
    $server_name="localhost";
    $database="college";

    $con= mysqli_connect($server_name,$user,$pass,$database);

    if(!$con){
        die("not connected".mysqli_connect_error());
    }
    

?>