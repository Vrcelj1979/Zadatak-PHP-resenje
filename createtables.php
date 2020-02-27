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

$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE groups (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table groups created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE usersGroups (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
users_id VARCHAR(30) NOT NULL,
groups_id VARCHAR(30) NOT NULL,
FOREIGN KEY (users_id) REFERENCES users(id),
FOREIGN KEY (groups_id) REFERENCES groups(id),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table usersGroups created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>