<?php
require_once "config.php";
$company = "yuqiu";
$product = "p1";
$sql = "SELECT company, product, username, review, rating, reg_date FROM rating WHERE company = '" . $company . "' AND product = '" . $product . "'ORDER BY reg_date DESC;";
	$result = mysqli_query($link, $sql);
	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
	    echo "company: " . $row["company"]. " product: ".$row["product"]." username: ".$row["username"]." review: ".$row["review"]." rating: ".$row["rating"]." reg_date: ".$row["reg_date"] . "<br>";
	  }
	} else {
	  echo "0 results";
	}
?>