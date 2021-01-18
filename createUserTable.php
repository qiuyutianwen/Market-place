<?php
require_once "config.php";

// sql to create table
$sql = "CREATE TABLE users (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($link, $sql)) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . mysqli_error($link);
}

mysqli_close($link);
?>
