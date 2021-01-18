<?php
require_once "config.php";

//drop table
$sql1 = "DROP TABLE IF EXISTS FBTable";
if(mysqli_query($link, $sql1))
{
	echo "Table FBTable deleted successfully";
} else {
	echo "Error deleting table: " . mysqli_error($link);
}

//set char set
mysqli_set_charset($link,"utf8mb4");

echo "Current character set is: " . mysqli_character_set_name($link);
// sql to create table
$sql = "CREATE TABLE FBTable (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fbID VARCHAR(50) NOT NULL UNIQUE,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($link, $sql)) {
  echo "Table FBTable created successfully";
} else {
  echo "Error creating table: " . mysqli_error($link);
}

mysqli_close($link);
?>
