<?php

	$conn = mysqli_connect('localhost', 'adminpizza', 'password@123','todolist');

	if (!$conn)
		{

			echo "Connection Error: " . mysql_connect_error();

		}
		else
		{

			#	echo "Welcome";
		}
?>