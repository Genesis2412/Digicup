<?php

	//connecting to database
	$servername='localhost:3306';
	$username='nem644_admin';
	$password='Digicup0000';
	$database='nem644_befriendersmauritius';

	$connection=mysqli_connect($servername,$username,$password,$database);

	//check connection
	if(!$connection)
	{
		die("Connection failed, try again later");
	}
	
	mysqli_set_charset($connection,"utf8"); // Change character set to utf8
?>