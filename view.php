<!DOCTYPE html5>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Load test</title>
		<link rel="icon" href="favicon.png" sizes="16x16" type="image/png"/>
		<script src="load.js"></script>
	</head>
	<body>
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300" height="300">
			<defs>
				<pattern id="foam" width="5" height="5" patternUnits="userSpaceOnUse">
					<image width="4.5" height="4.5" xlink:href="assets/ball.jpeg"/><!-- Credit to https://stackoverflow.com/a/50304067 -->
				</pattern>
			</defs>
			<circle cx="50" cy="25" r="10" fill="url(#foam)" stroke="black" stroke-width="2"/>
			<image width="50" height="50" x="100" y="100" xlink:href="assets/ball.jpeg"/>
		</svg>
		<button>Update JPG</button>
		<a download>Download last-updated JPG</a>
		<img width="300" height="300"/>
	</body>
</html>
