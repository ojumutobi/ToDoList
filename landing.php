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


	<!--<div class="auth_panel">
		<form action="login.php" method ="POST">
			<input type="email" name="email" required placeholder="Email"> 
			<input type="password" name="pwd" required placeholder="Password"><br>			
			<input type="submit" class="submit" name="Enter">
		</form>	

	</div>

	-->
	
	<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Task Details</h2>
                        
                    </div>
                    <?php
                    // Include config file
                   # require_once "config.php";
                    
					include('config/db_cxn.php');

                    // Attempt select query execution
                    $sql = 'SELECT * FROM tasklist';
                    if ($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Task Description</th>";
                                        echo "<th>Task Location</th>";
                                        echo "<th>Salary</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['Id'] . "</td>";
                                        echo "<td>" . $row['TaskName'] . "</td>";
                                        echo "<td>" . $row['LocationOfTask'] . "</td>";
                                        echo "<td>" . $row['Action'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['Id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['Id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['Id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>