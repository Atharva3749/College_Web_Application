<?php

    include 'connection.php';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $contact=$_POST['contact'];
    $bdate=$_POST['bdate'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $expert=$_POST['expert'];
    
    if(isset($_POST['submit'])){

        $insert_query = "INSERT INTO faculty (name,email,password,contact,bdate,gender,address,expertise) VALUES ('$name','$email','$pass','$contact','$bdate','$gender','$address','$expert')";

        $res = mysqli_query($con,$insert_query);
    }
    if($res){
        ?>
        <script>
            alert("Account created");
            alert("Please go to login page");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Something went wrong!!"); 
        </script>
        <?php
    }

    $con->close();

?>