<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 slide_transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Dorsay Creations</title>
	<link href="styles/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/actions.js"></script>
</head>
<body>
	<div id="container">
		<!-- TITLE -->
		<?php include 'header.php'; ?>
		<!-- CONTENT -->
		<div id="content">
			<div class="item">
				<div id="about" onclick="location.href('about.php')" class="slide_transition">
					<h3>ABOUT</h3>
					<p>Hello, my name is Brycen Dorsay and I am into website and mobile application development. I am 19 years old and I am taking Computer Systems Technology at British Columbia Institute of Technology. Welcome to my portfolio page full of my past and future creations.</p>
				</div>
			</div>
			<div class="item">
				<div id="contact" onclick="location.href='#'" class="slide_transition">
					<h3>CONTACT</h3>
					<p><span class="contact_left">Email:</span><span class="contact_right">dorsay@live.ca</span><br>
					<span class="contact_left">Phone:</span><span class="contact_right">1 (250) 937-7361</span><br />
					<span class="contact_left">Address:</span><span class="contact_right">5211 Grimmer Street, Burnaby BC</span></p>
				</div>
			</div>
			<div class="break"></div>
			<div class="item">
				<div id="projects" onclick="location.href('projects.php')" class="slide_transition">
					<img src="images/android.png" class="images_tabs" alt="Projects"
						width="240" height="280" />
					<h3>PROJECTS</h3>
				</div>
			</div>
			<div class="item">
				<div id="ideas" onclick="location.href='#'" class="slide_transition">
					<img src="images/android.png" class="images_tabs" alt="Ideas"
						width="240" height="280" />
					<h3>IDEAS</h3>
				</div>
			</div>
			<div class="item">
				<div id="accomp" onclick="location.href='#'" class="slide_transition">
					<img src="images/android.png" class="images_tabs"
						alt="Accomplishments" width="240" height="280" />
					<h3>ACCOMPLISHMENTS</h3>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
