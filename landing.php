<?php

	include('config/db_cxn.php');

	//$conn = mysqli_connect('localhost', 'adminpizza', 'password@123','ninja_pizza');

	

	// write query for pizza
	$query = 'SELECT * from tasklist';

	$result = mysqli_query($conn,$query);

	//fetch the result as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_free_result($result);

	
	mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

<?php

	include('templates/header.php');
?>

	<div class="caption">ToDo List Application</div>


	<div class="auth_panel">
		<form action="login.php" method ="POST">
			<input type="email" name="email" required placeholder="Email"> 
			<input type="password" name="pwd" required placeholder="Password"><br>			
			<input type="submit" class="submit" name="Enter">
		</form>	

	</div>
	
</body>
</html>