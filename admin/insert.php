<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'admin');

if(isset($_POST['insertdata']))
{
	$fname = mysqli_escape_string($connection,$_POST['fname']);
	$lname = mysqli_escape_string($connection,$_POST['lname']);
	$address = mysqli_escape_string($connection,$_POST['address']);
	$email = mysqli_escape_string($connection,$_POST['email']);
	$contact = mysqli_escape_string($connection,$_POST['contact']);

	$query = "INSERT INTO staff (`first_name`,`last_name`,`address`,`email`,`contact_number`) VALUES ('$fname','$lname','$address','$email','$contact')";
	$query_run = mysqli_query($connection, $query);

	if($query_run){
		echo '<script> alert("Staff Added") </script>';
		header('Location: addstaff.php');
	}
	else{
		echo'<script> alert("Staff Not Added ! ") </script>';
	}
}




?>