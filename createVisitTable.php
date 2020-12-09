<?php
echo "create visit times now.";
require_once "config.php";

// sql to create table
$sql = "CREATE TABLE visitTimes (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    company VARCHAR(50) NOT NULL,
    product VARCHAR(50) NOT NULL,
    visitTimes INT NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($link, $sql)) {
  echo "Table visitTimes created successfully";
} else {
  echo "Error creating table: " . mysqli_error($link);
}

mysqli_close($link);
?>