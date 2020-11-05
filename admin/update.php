<?php 

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'admin');

if(isset($_POST['updatedata']))
{

	$id = mysqli_escape_string($connection,$_POST['update_id']);

	$fname = mysqli_escape_string($connection,$_POST['fname']);
	$lname = mysqli_escape_string($connection,$_POST['lname']);
	$address = mysqli_escape_string($connection,$_POST['address']);
	$email = mysqli_escape_string($connection,$_POST['email']);
	$contact = mysqli_escape_string($connection,$_POST['contact']);

    $query = " UPDATE staff SET first_name='$fname', last_name='$lname', address='$address', email='$email', contact_number='$contact' WHERE id='$id' ";
    $query_run =  mysqli_query($connection,$query);

    if($query_run){
    	echo '<script> alert("Data Updated"); </script>';
    	header("Location:addstaff.php");
    }else{
    	echo '<script> alert("Data Not Updated"); </script>';
    }
}

?>