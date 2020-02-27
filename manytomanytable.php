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

$sql = "CREATE TABLE usersGroups (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user_id INTEGER NOT NULL,
group_id INTEGER NOT NULL,
ALTER TABLE `usersGroups` ADD FOREIGN KEY (`user_id`) REFERENCES `usersGroups`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `usersGroups` ADD FOREIGN KEY (`group_id`) REFERENCES `usersGroups`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table usersGroups created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>