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
					<a href="https://tympanus.net/codrops/?p=38923">Log Out</a>
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
										<a href="test.php?company=yuqiu&product=p1" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p1.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p2.png" alt="img02">
									<figcaption>
										<h3>Product 2</h3>
										<a href="test.php?company=yuqiu&product=p2" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p2.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p3.png" alt="img03">
									<figcaption>
										<h3>Product 3</h3>
										<a href="test.php?company=yuqiu&product=p3" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p3.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p4.png" alt="img04">
									<figcaption>
										<h3>Product 4</h3>
										<a href="test.php?company=yuqiu&product=p4" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p4.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p5.jpg" alt="img05">
									<figcaption>
										<h3>Product 5</h3>
										<a href="test.php?company=yuqiu&product=p5" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p5.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p6.png" alt="img06">
									<figcaption>
										<h3>Product 6</h3>
										<a href="test.php?company=yuqiu&product=p6" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p6.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p7.png" alt="img07">
									<figcaption>
										<h3>Product 7</h3>
										<a href="test.php?company=yuqiu&product=p7" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p7.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p8.jpg" alt="img08">
									<figcaption>
										<h3>Product 8</h3>
										<a href="test.php?company=yuqiu&product=p8" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p8.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p9.jpg" alt="img09">
									<figcaption>
										<h3>Product 9</h3>
										<a href="test.php?company=yuqiu&product=p9" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p9.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/yuqiu/p10.jpg" alt="img10">
									<figcaption>
										<h3>Product 10</h3>
										<a href="test.php?company=yuqiu&product=p10" style="bottom: 50px">Review</a>
										<a href="http://vast-cove-29148.herokuapp.com/p10.php">Take a look</a>
									</figcaption>
								</figure>
							</li>
						</ul>
					</div>
				</div>
				<div class="heading" id = "heading4" style="z-index: 7">
					Jing Xue
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
				<div class="heading" id = "heading5" style="z-index: 7">
					That's it, thank you for scrolling! :)
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
				<div class="heading" id = "heading6" style="z-index: 7">
					That's it, thank you for scrolling! :)
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
				<div class="heading" id = "heading7" style="z-index: 7">
					That's it, thank you for scrolling! :)
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
