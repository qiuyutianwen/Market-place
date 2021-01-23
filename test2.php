<?php
session_start();
require_once "config.php";

//get top 5 most average rating data
$sql4 = "SELECT id, fbID, username, email, reg_date FROM FBTable ORDER BY id";
$result = mysqli_query($link, $sql4);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  	echo $row["id"] . " " . $row["fbID"] . " " . $row["username"] . " " . $row["email"] . " " . $row["reg_date"] . "<br />";
  }
} else {
  echo "No data!";
}

mysqli_close($link);
?>
