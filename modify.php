<!DOCTYPE html>
<html>
 <head>
  <title>REST API service/modify</title>
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

	$sql = "UPDATE users SET name='Doe' WHERE id=2";

	if ($conn->query($sql) === TRUE) {
	    echo "Modify successfully";
	} else {
	    echo "Error updating record: " . $conn->error;
	}

	$conn->close();

	?>
 </body>
</html>