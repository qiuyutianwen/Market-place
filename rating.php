<?php
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: /login.php");
    exit;
}
$username = $_SESSION["username"];
$company = $_GET["company"];
$product = $_GET["product"];
$type = $_GET["type"];
$_SESSION["company"] = $company;
$_SESSION["product"] = $product;
require_once "config.php";
//update visitTimes table
$sql = "SELECT visitTimes FROM visitTimes WHERE company = '" . $company . "' AND product = '" . $product . "';";
$result = mysqli_query($link, $sql);
$visitTimes = "";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $visitTimes =  $row["visitTimes"];
  }
} else {
  echo "<script>alert('This page hasn't been visited now!');</script>";
}
$new_vt = (int)$visitTimes + 1;
$sql = "UPDATE visitTimes SET visitTimes = '" .$new_vt . "' WHERE company = '" . $company . "' AND product = '" . $product . "';";

if (mysqli_query($link, $sql)) {
  //just update database
} else {
	$error = mysqli_error($link);
	echo "<script>alert('$error');</script>";
}

//get review data
$sql = "SELECT company, product, username, review, rating, reg_date FROM rating WHERE company = '" . $_SESSION["company"] . "' AND product = '" . $_SESSION["product"] . "'ORDER BY reg_date DESC;";
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
  echo "<script>alert('This page doesn't have any reviews now!');</script>";
}
if($count > 0)
{
	$average_rating = $total_rating / $count;
	$average_rating = round($average_rating, 1);
}
mysqli_close($link);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatiable" content="ie=edge">
	<title>Rating</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
	<link rel="stylesheet" href="CSS/rating.css"/>
</head>
<body style="background-color: #000; color: #fff;">
	<h1 class="rating_title"  style="font-family: 'Pacifico';font-size: 60px; background-image: linear-gradient(to right, #33ccff, #ff99cc);">Review</h1>
	<section style="padding: 50px 0 50px 0;">
		
		<div class="rating_product_img">
			<picture>
				<?php echo "<img src='images/$company/$product.$type'>";?>
			</picture>
		</div>
		<div class="rating_commonts">
			<label>Write a Review</label>
			<textarea id="comment" placeholder="Write something.." style="height:150px" maxlength="255"></textarea>
			<div>
				<span>Rating</span>
				<i class="fa fa-star fa-3x" data-index="0"></i>
				<i class="fa fa-star fa-3x" data-index="1"></i>
				<i class="fa fa-star fa-3x" data-index="2"></i>
				<i class="fa fa-star fa-3x" data-index="3"></i>
				<i class="fa fa-star fa-3x" data-index="4"></i>
			</div>
		</div>
		<div class="clear"></div>
	</section>

	<section style="background-color:#333333; padding: 0 0 50px 0;">
		<div class="review_left" id="fixPara">
		<div class="rating_starts">
			<?php echo "<p>Average Rating: $count Reviewers</p>";?>
			<?php echo "<h1>$average_rating</h1>";?>		
		</div>
		<div class="reviewRow">
		  <div class="side">
		    <div>5 star</div>
		  </div>
		  <div class="middle">
		    <div class="bar-container">
		      <div class="bar-5" id="bar_5"></div>
		    </div>
		  </div>
		  <div class="side right">
		    <?php echo "<div>$star_5</div>";?>	
		  </div>
		  <div class="side">
		    <div>4 star</div>
		  </div>
		  <div class="middle">
		    <div class="bar-container">
		      <div class="bar-4" id="bar_4"></div>
		    </div>
		  </div>
		  <div class="side right">
		    <?php echo "<div>$star_4</div>";?>	
		  </div>
		  <div class="side">
		    <div>3 star</div>
		  </div>
		  <div class="middle">
		    <div class="bar-container">
		      <div class="bar-3" id="bar_3"></div>
		    </div>
		  </div>
		  <div class="side right">
		    <?php echo "<div>$star_3</div>";?>	
		  </div>
		  <div class="side">
		    <div>2 star</div>
		  </div>
		  <div class="middle">
		    <div class="bar-container">
		      <div class="bar-2" id="bar_2"></div>
		    </div>
		  </div>
		  <div class="side right">
		    <?php echo "<div>$star_2</div>";?>	
		  </div>
		  <div class="side">
		    <div>1 star</div>
		  </div>
		  <div class="middle">
		    <div class="bar-container">
		      <div class="bar-1" id="bar_1"></div>
		    </div>
		  </div>
		  <div class="side right">
		    <?php echo "<div>$star_1</div>";?>	
		  </div>
		</div>
		</div>

		<div class="review_right">
			<ul class="review_list">
				<?php 
					$array_len = sizeof($data_array);
					for($i=0; $i < $array_len;$i++)
					{
						echo "<li>
							<div>
								<img src='images/defaultUser.png'>
								<span class='username'>".$data_array[$i][2]."</span>
								<span class='stars'>Rating: ".$data_array[$i][4]."</span>
								<span class='reviewDate'>Posted at: ".$data_array[$i][5]."</span>
							</div>
							<div>
								<p>
								".$data_array[$i][3]."
								</p>
							</div>
						</li>";
					}?>
			</ul>
		</div>

		<div class="clear"></div>
	</section>

	<script type="text/javascript">
		var star1 = '<?php echo $star_1;?>';
		var star2 = '<?php echo $star_2;?>';
		var star3 = '<?php echo $star_3;?>';
		var star4 = '<?php echo $star_4;?>';
		var star5 = '<?php echo $star_5;?>';
		var max = Math.max(star1, star2, star3, star4, star5);
		document.getElementById("bar_5").style.width = Math.floor(star5/max*100).toString() + "%";
		document.getElementById("bar_4").style.width = Math.floor(star4/max*100).toString() + "%";
		document.getElementById("bar_3").style.width = Math.floor(star3/max*100).toString() + "%";
		document.getElementById("bar_2").style.width = Math.floor(star2/max*100).toString() + "%";
		document.getElementById("bar_1").style.width = Math.floor(star1/max*100).toString() + "%";
	</script>
	<script type="text/javascript">
    window.onload=
        function(){
            var oDiv = document.getElementById("fixPara"),
                H = 0,
                Y = oDiv        
            while (Y) {
                H += Y.offsetTop; 
                Y = Y.offsetParent;
            }
            window.onscroll = function()
            {
                var s = document.body.scrollTop || document.documentElement.scrollTop
                if(s>H) {
                    oDiv.style = "position:fixed;top:0;"
                } else {
                    oDiv.style = ""
                }
            }
        }
	</script>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script>
		var ratedIndex = -1;
		

		$(document).ready(function() {
			resetStarColors();

			if(localStorage.getItem('ratedIndex') != null)
			{
				for(var i=0; i <= parseInt(localStorage.getItem('ratedIndex')); i++)
				{
					$('.fa-star:eq('+i+')').css('color', 'yellow');
				}
			}
			$('.fa-star').on('click', function() {
				ratedIndex = parseInt($(this).data('index'));
				localStorage.setItem('ratedIndex', ratedIndex);
				var review = $.trim($("#comment").val());
				saveToTheDB(review);
			});

			$('.fa-star').mouseover(function() {
				resetStarColors();
				var currentIndex = parseInt($(this).data('index'));

				for(var i = 0; i <= currentIndex; i++)
				{
					$('.fa-star:eq('+i+')').css('color', 'yellow');
				}
			});

			$('.fa-star').mouseleave(function() {
				resetStarColors();
				if(ratedIndex != -1)
				{
					for(var i=0; i <= ratedIndex; i++)
					{
						$('.fa-star:eq('+i+')').css('color', 'yellow');
					}
				}
			});
		});

		var c = '<?php echo $company;?>';
		var p = '<?php echo $product;?>';
		var t = '<?php echo $type;?>';
		var preurl = "rating.php"+"?company="+c+"&product="+p+"&type="+t;
		var myurl="handleAjax.php"+"?company="+c+"&product="+p+"&type="+t;
		function saveToTheDB(review) {
			$.ajax({
				url: myurl,
				method: "POST",
				data: {
					'save': 1,
					'ratedIndex': ratedIndex,
					'review': review
				}, success: function(data) {
					console.log(data);
					if(data == "True")
					{
						alert('Rating and review are succesfully uploaded!');
						window.location.href=preurl;
					}else{
						alert(data);
					}
				}
			});
		}
		function resetStarColors(){
			$('.fa-star').css('color', 'white');
		}

	</script>
</body>
</html>