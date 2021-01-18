<?php
require_once "config.php";

mysqli_set_charset($conn,"utf8mb4");

echo "Current character set is: " . mysqli_character_set_name($conn);
// sql to create table
$sql = "CREATE TABLE users (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fbID VARCHAR(50) NOT NULL UNIQUE,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
