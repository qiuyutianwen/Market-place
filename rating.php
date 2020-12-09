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

require_once "config.php";

$sql = "SELECT visitTimes FROM visitTimes WHERE company = " . $company . "AND product = " . $product;
$result = mysqli_query($link, $sql);

echo "<h1>$result</h1>";
// $sql = "UPDATE visitTimes SET visitTimes ='Doe' WHERE id=2";

// if (mysqli_query($link, $sql)) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . mysqli_error($link);
// }
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
	<link rel="stylesheet" href="CSS/rating.css"/>
</head>
<body>
	<div>
		<?php echo "<img src='images/$company/$product.$type'>";?>
		<label for="review">Review</label>
		<textarea id="review" name="review" placeholder="Write something.." style="height:200px" maxlength="255"></textarea>
	</div>
	<div align="center" style="background: #000; padding: 50px;">
		<i class="fa fa-star fa-3x" data-index="0"></i>
		<i class="fa fa-star fa-3x" data-index="1"></i>
		<i class="fa fa-star fa-3x" data-index="2"></i>
		<i class="fa fa-star fa-3x" data-index="3"></i>
		<i class="fa fa-star fa-3x" data-index="4"></i>
	</div>

	 <div class="reviewRow">
	  <div class="side">
	    <div>5 star</div>
	  </div>
	  <div class="middle">
	    <div class="bar-container">
	      <div class="bar-5"></div>
	    </div>
	  </div>
	  <div class="side right">
	    <div>500</div>
	  </div>
	  <div class="side">
	    <div>4 star</div>
	  </div>
	  <div class="middle">
	    <div class="bar-container">
	      <div class="bar-4"></div>
	    </div>
	  </div>
	  <div class="side right">
	    <div>63</div>
	  </div>
	  <div class="side">
	    <div>3 star</div>
	  </div>
	  <div class="middle">
	    <div class="bar-container">
	      <div class="bar-3"></div>
	    </div>
	  </div>
	  <div class="side right">
	    <div>15</div>
	  </div>
	  <div class="side">
	    <div>2 star</div>
	  </div>
	  <div class="middle">
	    <div class="bar-container">
	      <div class="bar-2"></div>
	    </div>
	  </div>
	  <div class="side right">
	    <div>200</div>
	  </div>
	  <div class="side">
	    <div>1 star</div>
	  </div>
	  <div class="middle">
	    <div class="bar-container">
	      <div class="bar-1"></div>
	    </div>
	  </div>
	  <div class="side right">
	    <div>20</div>
	  </div>
	</div>
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
			})
		});

		function resetStarColors(){
			$('.fa-star').css('color', 'white');
		}

	</script>
</body>
</html>