<?php 

include 'connection.php';


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

if(isset($_POST['submit'])){

$insertquery = "INSERT INTO contact (first_name,last_name,email,phone,comments) VALUES ('$first_name','$last_name','$email','$phone','$comments')";

$res = mysqli_query($con,$insertquery);

if($res){
	?>
	<script>
		alert("Query received");
	</script>
	<?php
}else{
	?>
	<script>
		alert("Something went wrong!!"); 
	</script>
	<?php
}

}

?>

