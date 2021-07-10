<?php

	include('config/db_cxn.php');


	#$title = ;
	#$errors = ;#

	if (isset($_POST['submit']))
	{		

		$taskName = mysqli_real_escape_string($conn, $_POST['taskName']);
		$action =   mysqli_real_escape_string($conn, $_POST['action']);
		$location = mysqli_real_escape_string($conn, $_POST['location']);

		// write query for pizza
		$query = "INSERT INTO tasklist(TaskName, Action, LocationOfTask)
		 VALUES('$taskName', '$action', '$location')";	

		//fetch the result as an array
		if (mysqli_query($conn,$query))
		{
			function_alert("A new task has been created successfully");

			header('Location: landing.php');
		}
		else
		{
			echo "Error";

		}


	}

		function function_alert($msg) {
		    echo "<script type='text/javascript'>alert('$msg');</script>";
		}
?>









<!DOCTYPE html>
<html>

<?php

	include('templates/header.php');
?>

	<section class="container grey-text">
		<h4 class="center">Add a New List</h4>
		<form class="white" action="AddList.php" method="POST">
			<label>Task Name:</label>
			<input type="text" name="taskName">
			<label>Action:</label>
			<input type="text" name="action">
			<label>Location:</label>
			<input type="text" name="location">
			<div class="center">
				<input type="submit" name ="submit" value="submit" class="btn blue">
			</div>
		</form>
	</section>


</body>
</html>