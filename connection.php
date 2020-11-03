<?php

	//connecting to database
	$servername='localhost';
	$username='root';
	$password='';
	$database='befrienders';

	$connection=mysqli_connect($servername,$username,$password,$database);

	//check connection
	if(!$connection)
	{
		die("Connection failed, try again later");
	}
?>