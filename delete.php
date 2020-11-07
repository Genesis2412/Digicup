<?php 
include('connection.php');
?>

<?php 

if(isset($_POST['deletedata']))
{
	$id = mysqli_escape_string($connection,$_POST['delete_id']);

	$query = "DELETE FROM staff WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);

	if($query_run){
		echo '<script> alert("Data Deleted"); </script>';
		 header("Location:addstaff.php"); 
	}else{
		echo '<script> alert("Data Not Deleted"); </script>';
	}
}

?>