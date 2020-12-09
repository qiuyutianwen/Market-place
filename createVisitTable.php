<?php
require_once "config.php";
//drop table
$sql1 = "DROP TABLE IF EXISTS visitTimes";
if(mysqli_query($link, $sql1))
{
	echo "Table visitTimes deleted successfully";
} else {
	echo "Error creating table: " . mysqli_error($link);
}
// sql to create table
$sql2 = "CREATE TABLE visitTimes (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    company VARCHAR(50) NOT NULL,
    product VARCHAR(50) NOT NULL,
    visitTimes INT NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($link, $sql2)) {
  echo "Table visitTimes created successfully";
} else {
  echo "Error creating table: " . mysqli_error($link);
}

//initialize data
$sql3 = "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yuqiu', 'p1', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yuqiu', 'p2', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yuqiu', 'p3', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yuqiu', 'p4', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yuqiu', 'p5', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yuqiu', 'p6', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yuqiu', 'p7', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yuqiu', 'p8', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yuqiu', 'p9', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yuqiu', 'p10', 0);";

$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('dongmeiyin', 'p1', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('dongmeiyin', 'p2', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('dongmeiyin', 'p3', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('dongmeiyin', 'p4', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('dongmeiyin', 'p5', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('dongmeiyin', 'p6', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('dongmeiyin', 'p7', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('dongmeiyin', 'p8', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('dongmeiyin', 'p9', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('dongmeiyin', 'p10', 0);";

$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('anbo', 'p1', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('anbo', 'p2', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('anbo', 'p3', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('anbo', 'p4', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('anbo', 'p5', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('anbo', 'p6', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('anbo', 'p7', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('anbo', 'p8', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('anbo', 'p9', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('anbo', 'p10', 0);";

$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('jingxue', 'p1', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('jingxue', 'p2', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('jingxue', 'p3', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('jingxue', 'p4', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('jingxue', 'p5', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('jingxue', 'p6', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('jingxue', 'p7', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('jingxue', 'p8', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('jingxue', 'p9', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('jingxue', 'p10', 0);";

$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yirusun', 'p1', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yirusun', 'p2', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yirusun', 'p3', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yirusun', 'p4', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yirusun', 'p5', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yirusun', 'p6', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yirusun', 'p7', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yirusun', 'p8', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yirusun', 'p9', 0);";
$sql3 .= "INSERT INTO visitTimes (company, product, visitTimes)
VALUES ('yirusun', 'p10', 0);";
if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($link);
?>