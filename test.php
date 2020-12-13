<?php
require_once "config.php";
// $sql = "SELECT * FROM rating;";
// $result = mysqli_query($link, $sql);
// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "company: ".$row["company"]. " product: " .$row["product"]. " username: " .$row["username"]. " review: " .$row["review"]." Rating: ".$row["rating"]."<br>";
//   }
// } else {
//   echo "<script>alert('This page hasn't been visited now!');</script>";
// }


// $sql = "SELECT company, product, AVG(rating) AS AverageRating FROM rating GROUP BY company, product ORDER BY AverageRating DESC LIMIT 5;";
// $result = mysqli_query($link, $sql);
// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "company: ".$row["company"]. " product: " .$row["product"]." AverageRating: ".$row["AverageRating"]."<br>";
//   }
// } else {
//   echo "<script>alert('This page hasn't been visited now!');</script>";
// }
// $sql = "SELECT company, product, visitTimes FROM visitTimes ORDER BY visitTimes DESC LIMIT 5;";
// $result = mysqli_query($link, $sql);
// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "company: ".$row["company"] ." product: ".$row["product"]." visitTimes: ".$row["visitTimes"]."<br>";
//   }
// } else {
//   echo "<script>alert('This page hasn't been visited now!');</script>";
// }
$sql = "SELECT company, product, AVG(rating) AS AverageRating FROM rating GROUP BY company, product ORDER BY AverageRating DESC LIMIT 5;";
$result = mysqli_query($link, $sql);
$Top5_Most_Avg_array = array();
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  	$array_item = array();
  	$Top5_Most_Avg_name = $row["company"]."-".$row["product"];
  	$Top5_Most_Avg_rating = $row["AverageRating"];
    
    array_push($array_item, $Top5_Most_Avg_name);
    array_push($array_item, $Top5_Most_Avg_rating);
    array_push($Top5_Most_Avg_array, $array_item);
  }
} else {
  echo "<script>alert('No data!');</script>";
}

//get top 5 most visited data
// $sql = "SELECT company, product, visitTimes FROM visitTimes ORDER BY visitTimes DESC LIMIT 5;";
// $result = mysqli_query($link, $sql);
// $Top5_Most_Visit_array = array();
// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     $array_item = array();
//   	$Top5_Most_Visit_name = $row["company"]."-".$row["product"];
//   	$Top5_Most_VisitTimes = $row["visitTimes"];
    
//     array_push($array_item, $Top5_Most_Visit_name);
//     array_push($array_item, $Top5_Most_VisitTimes);
//     array_push($Top5_Most_Visit_array, $array_item);
//   }
// } else {
//   echo "<script>alert('This page hasn't been visited now!');</script>";
// }

for($i=0;$i<5;$i++)
{
	echo $i .": ".$Top5_Most_Avg_array[$i][0] . " " $Top5_Most_Avg_array[$i][1]."<br>";
}
// for($i=0;$i<5;$i++)
// {
// 	echo $i .": ".$Top5_Most_Visit_array[$i][0] . " " $Top5_Most_Visit_array[$i][1];
// }
// mysqli_close($link);
?>