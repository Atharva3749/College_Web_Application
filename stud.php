<?php

include 'connection.php';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $contact=$_POST['contact'];
    $bdate=$_POST['bdate'];
    $gender=$_POST['gender'];
    $address= $_POST['address'];
    $class=$_POST['class'];
    $enroll=$_POST['enroll'];
    $hobbies=$_POST['hobbies'];

    if(isset($_POST['submit'])){

        $insert_query = "INSERT INTO student (name,email,password,contact,bdate,gender,address,class,enroll,hobbies) VALUES ('$name','$email','$pass','$contact','$bdate','$gender','$address','$class','$enroll','$hobbies')";

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

