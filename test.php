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
$sql = "SELECT company, product, visitTimes FROM visitTimes ORDER BY visitTimes DESC LIMIT 5;";
$result = mysqli_query($link, $sql);
$visitTimes = "";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "company: ".$row["company"] ." product: ".$row["product"]." visitTimes: ".$row["visitTimes"]."<br>";
  }
} else {
  echo "<script>alert('This page hasn't been visited now!');</script>";
}
mysqli_close($link);
?>