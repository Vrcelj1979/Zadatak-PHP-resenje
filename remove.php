<!DOCTYPE html>
<html>
 <head>
  <title>REST API service/remove</title>
 </head>
 <body>
 	<?php echo '<p>REST API SERVICE TASK</p>'; ?>

 	<div>
 		<a href="vezbe.php">Home page</a>
 	</div>
 	<?php
	$servername = "localhost";
	$username = "root";
	$password = "Svartwd2018$";
	$dbname = "task";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	echo "Connected successfully <br>"; 

	// sql delete data from table

	$sql = "DELETE FROM groups WHERE id=3";

	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	} else {
	    echo "Error deleting record: " . $conn->error;
	}

	$conn->close();

	?>
 </body>
</html>