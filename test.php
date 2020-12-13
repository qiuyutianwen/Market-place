<?php
require_once "config.php";
$company = "yuqiu";
$product = "p1";
$sql = "SELECT company, product, username, review, rating, reg_date FROM rating WHERE company = '" . $company . "' AND product = '" . $product . "'ORDER BY reg_date DESC;";
	$result = mysqli_query($link, $sql);
	$data_array = array(); 
	$count = 0;
	$total_rating = 0; 
	$average_rating = 0.0;
	$star_1 = 0;
	$star_2 = 0;
	$star_3 = 0;
	$star_4 = 0;
	$star_5 = 0;
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
	    	$total_rating += $row["rating"];
	    	$count++;

	    	if($row["rating"] === "5")
	    	{
	    		$star_5++;
	    	} elseif($row["rating"] === "4")
	    	{
	    		$star_4++;
	    	} elseif($row["rating"] === "3")
	    	{
	    		$star_3++;
	    	} elseif($row["rating"] === "2")
	    	{
	    		$star_2++;
	    	} elseif($row["rating"] === "1")
	    	{
	    		$star_1++;
	    	}
	  }
	} else {
	  echo "0 results";
	}
if($count > 0)
{
	$average_rating = $total_rating / $count;
	$average_rating = round($average_rating, 1);
}
echo "new test: <br>";
// $array_len = sizeof($data_array);
// for($i=0; $i < $array_len;$i++)
// {
// 	echo "company: " . $data_array[$i][0]. " product: ".$data_array[$i][1]." username: ".$data_array[$i][2]." review: ".$data_array[$i][3]." rating: ".$data_array[$i][4]." reg_date: ".$data_array[$i][5] . "<br>";
// }
echo $average_rating."<br>";
echo $count."<br>";
echo $star_5."<br>";
echo $star_4."<br>";
echo $star_3."<br>";
echo $star_2."<br>";
echo $star_1."<br>";
$array_len = sizeof($data_array);
					for($i=0; $i < $array_len;$i++)
					{
						echo "<li>
							<div>
								<img src="images/defaultUser.png">
								<span class="username">".$data_array[$i][2]."</span>
								<span class="stars">Rating: ".$data_array[$i][4]."</span>
								<span class="reviewDate">Posted at: ".$data_array[$i][5]."</span>
							</div>
							<div>
								<p>
								".$data_array[$i][3]."
								</p>
							</div>
						</li>";
					}
mysqli_close($link);
?>