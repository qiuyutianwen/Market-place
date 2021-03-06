<?php
require_once "config.php";
//drop table
$sql1 = "DROP TABLE IF EXISTS rating";
if(mysqli_query($link, $sql1))
{
	echo "Table rating deleted successfully";
} else {
	echo "Error creating table: " . mysqli_error($link);
}
// sql to create table
$sql2 = "CREATE TABLE rating (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    company VARCHAR(50) NOT NULL,
    product VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    review VARCHAR(255),
    rating INT(10) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($link, $sql2)) {
  echo "Table rating created successfully";
} else {
  echo "Error creating table: " . mysqli_error($link);
}

//initialize data
$sql3 = "INSERT INTO rating (company, product, username, review, rating)
VALUES ('yuqiu', 'p1', 'qwer@gmail.com', 'Great! I like it very much.', '5');";
$sql3 .= "INSERT INTO rating (company, product, username, review, rating)
VALUES ('anbo', 'p1', 'qwe@gmail.com', 'Good! I like it!', '5');";
$sql3 .= "INSERT INTO rating (company, product, username, review, rating)
VALUES ('dongmeiyin', 'p1', 'qwert@gmail.com', 'Good!', '5');";
$sql3 .= "INSERT INTO rating (company, product, username, review, rating)
VALUES ('jingxue', 'p1', 'qwertu@gmail.com', 'Great! That is what I expected!', '5');";
$sql3 .= "INSERT INTO rating (company, product, username, review, rating)
VALUES ('yirusun', 'p1', 'qwer@gmail.com', 'Good!', '5');";

if (mysqli_multi_query($link, $sql3)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql3 . "<br>" . mysqli_error($link);
}
mysqli_close($link);
?>