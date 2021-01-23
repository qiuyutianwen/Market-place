<?php
require_once "config.php";

//drop table
$sql1 = "DROP TABLE IF EXISTS GTable";
if(mysqli_query($link, $sql1))
{
	echo "Table GTable deleted successfully<br />";
} else {
	echo "Error deleting table: " . mysqli_error($link);
}

//set char set
mysqli_set_charset($link,"utf8mb4");
echo "Current character set is: " . mysqli_character_set_name($link) . "<br />";

// sql to create table
$sql2 = "CREATE TABLE GTable (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    gID VARCHAR(50) NOT NULL UNIQUE,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($link, $sql2)) {
  echo "Table GTable created successfully<br />";
} else {
  echo "Error creating table: " . mysqli_error($link);
}

// //insert test data
// $sql3 = "INSERT INTO GTable (gID, username, email)
// VALUES ('4252345', '仇禹', 'qiuyutianwen@gmail.com');";
//
// if (mysqli_multi_query($link, $sql3)) {
//   echo "New records created successfully<br />";
// } else {
//   echo "Error: " . $sql3 . "<br />" . mysqli_error($link);
// }

// //get top 5 most average rating data
// $sql4 = "SELECT id, gID, username, email, reg_date FROM GTable ORDER BY id";
// $result = mysqli_query($link, $sql4);
// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//   	echo $row["id"] . " " . $row["fbID"] . " " . $row["username"] . " " . $row["email"] . " " . $row["reg_date"] . "<br />";
//   }
// } else {
//   echo "No data!";
// }
mysqli_close($link);
?>
