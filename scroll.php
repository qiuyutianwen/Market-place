<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Project</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato|Nanum+Gothic:700|Raleway&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" href="css/StyleLoginForm.css"/> 
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
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<main>
			<div class="frame">
				
				<div class="frame__title-wrap">
					<h1 class="frame__title">WebGL Transitions on Scroll</h1>

				</div>
				<a class="frame__github" href="https://github.com/vaneenige/scroll-transitions-webgl">GitHub</a>
				<div class="frame__links">
					<a href="https://tympanus.net/Development/SVGImageHover/">Previous Demo</a>
					<a href="https://tympanus.net/codrops/?p=38923">Article</a>
				</div>
			</div>
			<div class="content content--canvas">
				<div class="header">
					<h1 class="header__title">Phenomenon</h1>
					<p class="header__text">WebGL based transitions on scroll</p>

				</div>
				
				<div class="heading">
					A tiny wrapper around three.js built for high-performance WebGL experiences.
				</div>
				<div class="heading">
					GPU based for smooth transitions like scale, rotation and movement.
				</div>
				<div class="heading">Modify default geometry and material for infinite possibilities.</div>
				<div class="heading">
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
		<script src="js/ScriptLoginForm.js"></script>
		<script src="js/toucheffects.js"></script>
		<script src="https://unpkg.com/three@0.102.1/build/three.min.js"></script>
		<script src="https://unpkg.com/three.phenomenon@1.1.0/dist/three.phenomenon.umd.js"></script>
		<script src="https://unpkg.com/uos@1.1.1/dist/uos.umd.js"></script>
		<script src="js/bundle.umd.js"></script>
	</body>
</html>
