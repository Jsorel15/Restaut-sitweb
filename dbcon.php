<?php
	
	$conn = mysqli_connect('localhost','root','','restaut');

	if ($conn == false) 
	{
		echo "Database connection failed";
	}
?>