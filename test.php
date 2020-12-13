<?php
require_once "config.php";
$company = "yuqiu";
$product = "p1";
$sql = "SELECT company, product, username, review, rating, reg_date FROM rating WHERE company = '" . $company . "' AND product = '" . $product . "'ORDER BY reg_date DESC;";
	$result = mysqli_query($link, $sql);
	$data_array = array(); 
	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
	  	$data_row = array();
	    	array_push($data_row, $row["company"]);
	    	array_push($data_row, $row["product"]);
	    	array_push($data_row, $row["username"]);
	    	array_push($data_row, $row["review"]);
	    	array_push($data_row, $row["rating"]);
	    	array_push($data_row, $row["reg_date"]);
	    	array_push($data_array, $data_row);
	    // echo "company: " . $row["company"]. " product: ".$row["product"]." username: ".$row["username"]." review: ".$row["review"]." rating: ".$row["rating"]." reg_date: ".$row["reg_date"] . "<br>";
	  }
	} else {
	  echo "0 results";
	}

echo "new test<br>";
$array_len = sizeof($data_array);
for($i=0; $i < $array_len;$i++)
{
	echo "company: " . $data_array[$i][0]. " product: ".$data_array[$i][1]." username: ".$data_array[$i][2]." review: ".$data_array[$i][3]." rating: ".$data_array[$i][4]." reg_date: ".$data_array[$i][5] . "<br>";
}
mysqli_close($link);
?>