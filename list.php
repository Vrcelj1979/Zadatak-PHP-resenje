<!DOCTYPE html>
<html>
 <head>
  <title>REST API service/list</title>
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

	// sql list data from table

	echo "Tabel users <br>";

	$sql = "SELECT id, name, password, email FROM users";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Password: " . $row["password"] . " - email: " . $row["email"] .  "<br>";
	    }
	} else {
	    echo "0 results";
	}

	echo "Tabel groups <br>";

	$sql = "SELECT id, name FROM groups";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}

	?>

 </body>
</html>

