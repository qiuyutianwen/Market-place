<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: /login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Project</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato|Nanum+Gothic:700|Raleway&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="CSS/base.css" />
		<link rel="stylesheet" type="text/css" href="CSS/default.css" />
		<link rel="stylesheet" type="text/css" href="CSS/component.css" />
        <link rel="stylesheet" href="CSS/StyleLoginForm.css"/> 
		<script>
			document.documentElement.className = 'js';
			var supportsCssVars = function() {
				var e,
					t = document.createElement('style');
				return (
					(t.innerHTML = 'root: { --tmp-var: bold; }'),
					document.head.appendChild(t),
					(e = !!(
						window.CSS &&
						window.CSS.supports &&
						window.CSS.supports('font-weight', 'var(--tmp-var)')
					)),
					t.parentNode.removeChild(t),
					e
				);
			};
			supportsCssVars() ||
				alert('Please view this demo in a modern browser that supports CSS Variables.');
		</script>
		<script src="JS/modernizr.custom.js"></script>
	</head>
	<body>
		<main>
			<div class="frame">
				
				<div class="frame__title-wrap">
					<h1 class="frame__title">Welcome, username</h1>

				</div>
				<a class="frame__github" href="https://github.com/vaneenige/scroll-transitions-webgl">GitHub</a>
				<div class="frame__links">
					<a href="logout.php">Log Out</a>
				</div>
			</div>
			<div class="content content--canvas">
				<div class="header" style="z-index: 1">
					<h1 class="header__title">Fancy Market</h1>
					<p class="header__text">Welcome to our fancy market.</p>

				</div>
				
				<div class="heading" style="z-index: 2">
					Top 5 most visited products.
					
				</div>
				<div class="heading" style="z-index: 3">
					Top 5 highest average rating.
				</div>
				<div class="heading" id = "heading3" style="z-index: 8">
					Yu Qiu
					<div class="container demo-3">
						<ul class="grid cs-style-3">
							<li>
								<figure>
									<img src="images/yuqiu/p1.png" alt="img01">
									<figcaption>
										<h3>Product 1</h3>
										<a href="rating.php?company=yuqiu&product=p1&type=png" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p1.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p2.png" alt="img02">
									<figcaption>
										<h3>Product 2</h3>
										<a href="rating.php?company=yuqiu&product=p2&type=png" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p2.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p3.png" alt="img03">
									<figcaption>
										<h3>Product 3</h3>
										<a href="rating.php?company=yuqiu&product=p3&type=png" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p3.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p4.png" alt="img04">
									<figcaption>
										<h3>Product 4</h3>
										<a href="rating.php?company=yuqiu&product=p4&type=png" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p4.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p5.jpg" alt="img05">
									<figcaption>
										<h3>Product 5</h3>
										<a href="rating.php?company=yuqiu&product=p5&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p5.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p6.png" alt="img06">
									<figcaption>
										<h3>Product 6</h3>
										<a href="rating.php?company=yuqiu&product=p6&type=png" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p6.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p7.png" alt="img07">
									<figcaption>
										<h3>Product 7</h3>
										<a href="rating.php?company=yuqiu&product=p7&type=png" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p7.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p8.jpg" alt="img08">
									<figcaption>
										<h3>Product 8</h3>
										<a href="rating.php?company=yuqiu&product=p8&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p8.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p9.jpg" alt="img09">
									<figcaption>
										<h3>Product 9</h3>
										<a href="rating.php?company=yuqiu&product=p9&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p9.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p10.jpg" alt="img10">
									<figcaption>
										<h3>Product 10</h3>
										<a href="rating.php?company=yuqiu&product=p10&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p10.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
						</ul>
					</div>
				</div>
				<div class="heading" id = "heading4" style="z-index: 7">
					Dongmei Yin
					<div class="container demo-3">
						<ul class="grid cs-style-3">
							<li>
								<figure>
									<img src="images/dongmeiyin/p1.png" alt="img01">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=dongmeiyin&product=p1&type=png" style="bottom: 50px">Review</a>
										<a href="http://lyn272.net/JennieIvoryChunkyCardigan.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/dongmeiyin/p2.png" alt="img02">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=dongmeiyin&product=p2&type=png" style="bottom: 50px">Review</a>
										<a href="http://lyn272.net/LACECOLLARBLOUSE.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/dongmeiyin/p3.png" alt="img03">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=dongmeiyin&product=p3&type=png" style="bottom: 50px">Review</a>
										<a href="http://lyn272.net/BLACKBUTTONSHORTS.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/dongmeiyin/p4.png" alt="img04">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=dongmeiyin&product=p4&type=png" style="bottom: 50px">Review</a>
										<a href="http://lyn272.net/BLACKSLITMIDISKIRT.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/dongmeiyin/p5.png" alt="img05">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=dongmeiyin&product=p5&type=png" style="bottom: 50px">Review</a>
										<a href="http://lyn272.net/WHITEPUFFSLEEVEDRESS.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/dongmeiyin/p6.png" alt="img06">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=dongmeiyin&product=p6&type=png" style="bottom: 50px">Review</a>
										<a href="http://lyn272.net/BLACKZIPUPDRESS.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/dongmeiyin/p7.png" alt="img07">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=dongmeiyin&product=p7&type=png" style="bottom: 50px">Review</a>
										<a href="http://lyn272.net/CoralLongScarf.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/dongmeiyin/p8.png" alt="img08">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=dongmeiyin&product=p8&type=png" style="bottom: 50px">Review</a>
										<a href="http://lyn272.net/PinkSheerBowScrunchie.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/dongmeiyin/p9.png" alt="img09">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=dongmeiyin&product=p9&type=png" style="bottom: 50px">Review</a>
										<a href="http://lyn272.net/AngelTearEarrings.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/dongmeiyin/p10.png" alt="img10">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=dongmeiyin&product=p10&type=png" style="bottom: 50px">Review</a>
										<a href="http://lyn272.net/BeadedNecklace.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
						</ul>
					</div>
				</div>
				<div class="heading" id = "heading5" style="z-index: 7">
					Bo An
					<div class="container demo-3">
						<ul class="grid cs-style-3">
							<li>
								<figure>
									<img src="images/anbo/p1.jpg" alt="img01">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=anbo&product=p1&type=jpg" style="bottom: 50px">Review</a>
										<a href="https://ismondaytmr.com/product/model1.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/anbo/p2.jpg" alt="img02">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=anbo&product=p2&type=jpg" style="bottom: 50px">Review</a>
										<a href="https://ismondaytmr.com/product/model2.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/anbo/p3.jpg" alt="img03">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=anbo&product=p3&type=jpg" style="bottom: 50px">Review</a>
										<a href="https://ismondaytmr.com/product/model3.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/anbo/p4.png" alt="img04">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=anbo&product=p4&type=png" style="bottom: 50px">Review</a>
										<a href="https://ismondaytmr.com/product/model4.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/anbo/p5.jpg" alt="img05">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=anbo&product=p5&type=jpg" style="bottom: 50px">Review</a>
										<a href="https://ismondaytmr.com/product/model5.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/anbo/p6.jpg" alt="img06">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=anbo&product=p6&type=jpg" style="bottom: 50px">Review</a>
										<a href="https://ismondaytmr.com/product/model6.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/anbo/p7.jpg" alt="img07">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=anbo&product=p7&type=jpg" style="bottom: 50px">Review</a>
										<a href="https://ismondaytmr.com/product/model7.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/anbo/p8.jpg" alt="img08">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=anbo&product=p8&type=jpg" style="bottom: 50px">Review</a>
										<a href="https://ismondaytmr.com/product/model8.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/anbo/p9.jpg" alt="img09">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=anbo&product=p9&type=jpg" style="bottom: 50px">Review</a>
										<a href="https://ismondaytmr.com/product/model9.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/anbo/p10.jpg" alt="img10">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=anbo&product=p10&type=jpg" style="bottom: 50px">Review</a>
										<a href="https://ismondaytmr.com/product/model10.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
						</ul>
					</div>
				</div>
				<div class="heading" id = "heading6" style="z-index: 7">
					Jing Xue
					<div class="container demo-3">
						<ul class="grid cs-style-3">
							<li>
								<figure>
									<img src="images/jingxue/p1.jpg" alt="img01">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=jingxue&product=p1&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://thesnowview.com/products/vrset.php?id=vrset">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/jingxue/p2.jpg" alt="img02">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=jingxue&product=p2&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://thesnowview.com/products/disney.php?id=disney">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/jingxue/p3.jpg" alt="img03">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=jingxue&product=p3&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://thesnowview.com/products/yellowStone.php?id=yellowStone">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/jingxue/p4.jpg" alt="img04">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=jingxue&product=p4&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://thesnowview.com/products/yosemite.php?id=yosemite">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/jingxue/p5.jpg" alt="img05">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=jingxue&product=p5&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://thesnowview.com/products/paris.php?id=paris">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/jingxue/p6.jpg" alt="img06">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=jingxue&product=p6&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://thesnowview.com/products/manhattan.php?id=manhattan">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/jingxue/p7.jpg" alt="img07">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=jingxue&product=p7&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://thesnowview.com/products/bora.php?id=bora">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/jingxue/p8.jpg" alt="img08">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=jingxue&product=p8&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://thesnowview.com/products/dubai.php?id=dubai">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/jingxue/p9.jpg" alt="img09">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=jingxue&product=p9&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://thesnowview.com/products/tokyo.php?id=tokyo">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/jingxue/p10.jpg" alt="img10">
									<figcaption>
										<h3>Settings</h3>
										<a href="rating.php?company=jingxue&product=p10&type=jpg" style="bottom: 50px">Review</a>
										<a href="http://thesnowview.com/products/tahiti.php?id=tahiti">Take a look</a>
									</figcaption>
								</figure>
							</li>
						</ul>
					</div>
				</div>
				<div class="heading" id = "heading7" style="z-index: 7">
					Yiru Sun
					<div class="container demo-3">
						<ul class="grid cs-style-3">
							<li>
								<figure>
									<img src="images/4.png" alt="img04">
									<figcaption>
										<h3>Settings</h3>
										<span>Jacob Cummings</span>
										<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/4.png" alt="img04">
									<figcaption>
										<h3>Settings</h3>
										<span>Jacob Cummings</span>
										<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/4.png" alt="img04">
									<figcaption>
										<h3>Settings</h3>
										<span>Jacob Cummings</span>
										<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/4.png" alt="img04">
									<figcaption>
										<h3>Settings</h3>
										<span>Jacob Cummings</span>
										<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/4.png" alt="img04">
									<figcaption>
										<h3>Settings</h3>
										<span>Jacob Cummings</span>
										<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/4.png" alt="img04">
									<figcaption>
										<h3>Settings</h3>
										<span>Jacob Cummings</span>
										<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/4.png" alt="img04">
									<figcaption>
										<h3>Settings</h3>
										<span>Jacob Cummings</span>
										<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/4.png" alt="img04">
									<figcaption>
										<h3>Settings</h3>
										<span>Jacob Cummings</span>
										<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/4.png" alt="img04">
									<figcaption>
										<h3>Settings</h3>
										<span>Jacob Cummings</span>
										<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/4.png" alt="img04">
									<figcaption>
										<h3>Settings</h3>
										<span>Jacob Cummings</span>
										<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
									</figcaption>
								</figure>
							</li>
						</ul>
					</div>
				</div>
				
			</div>

			
		</main>
		<script>
			function monitorHeading () {
			    var h_array = document.querySelectorAll("div.heading");
			    var i;
			    var z_index_array = [];
				for (i = 0; i < h_array.length; i++) {
					z_index_array.push(h_array[i].style["z-index"]);
				}
			    var max_of_z_index = Math.max.apply(Math, z_index_array) + 1;
			    for (i = 0; i < h_array.length; i++) {
					if(h_array[i].style.opacity !== "0")
					{
						h_array[i].style["z-index"] = max_of_z_index;
					}
				}
			}
			    
			//--- 150 is a good compromise between UI response and browser load.
			window.setInterval (monitorHeading, 1000);
		</script>
		<script src="JS/ScriptLoginForm.js"></script>
		<script src="JS/toucheffects.js"></script>
		<script src="https://unpkg.com/three@0.102.1/build/three.min.js"></script>
		<script src="https://unpkg.com/three.phenomenon@1.1.0/dist/three.phenomenon.umd.js"></script>
		<script src="https://unpkg.com/uos@1.1.1/dist/uos.umd.js"></script>
		<script src="JS/bundle.umd.js"></script>
	</body>
</html>
