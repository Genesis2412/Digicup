<?php 
include('connection.php');
?>


<?php


if(isset($_POST['insertdata']))
{
	
	$fname = mysqli_real_escape_string($connection,$_POST['fname']);
	$lname = mysqli_real_escape_string($connection,$_POST['lname']);
	$address = mysqli_real_escape_string($connection,$_POST['address']);
	$email = mysqli_real_escape_string($connection,$_POST['email']);
	$contact = mysqli_real_escape_string($connection,$_POST['contact']);
	$position = mysqli_real_escape_string($connection,$_POST['position']);

	$emailquery = "SELECT * FROM staff WHERE email='$email' ";

	
	$query_run = mysqli_query($connection,$emailquery);

	$emailcount = mysqli_num_rows($query_run);

	if($emailcount>0){
		echo "Email Already Exists! Staff Not Added!";
		header('Location: addstaff.php');
	}else{
		$query = "INSERT INTO staff (`first_name`,`last_name`,`address`,`email`,`contact_number`,`position`) VALUES ( '$fname','$lname','$address','$email','$contact','$position')";

		$insertquery = mysqli_query($connection,$query);
	}

	if($insertquery){
		echo '<script> alert("Staff Added") </script>';
		header('Location: addstaff.php');
	}
	else{
		echo'<script> alert("Staff Not Added ! ") </script>';
	}
}




?>