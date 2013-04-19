<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Dorsay Creations</title>
	<link href="styles/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="JavaScript/jquery.js"></script>
	<script type="text/javascript" src="JavaScript/actions.js"></script>
</head>
<body>
	<div id="container">
		<!-- TITLE -->
		<?php include 'title.php'; ?>
		<!-- CONTENT -->
		<div id="content">
			<div class="item">
				<div class="about" onclick="location.href='about.php'">
					<h3>ABOUT</h3>
					<p>Hello, my name is Brycen Dorsay and I am into website and mobile application development. I am 19 years old and I am taking Computer Systems Technology at British Columbia Institute of Technology. Welcome to portfolio page full of my past and future projects and ideas.</p>
				</div>
			</div>
			<div class="item">
				<div class="contact" onclick="location.href='#'">
					<h3>CONTACT</h3>
					<p><span class="contact_left">Email:</span><span class="contact_right">dorsay@live.ca</span><br>
					<span class="contact_left">Phone:</span><span class="contact_right">1 (250) 937-7361</span><br />
					<span class="contact_left">Address:</span><span class="contact_right">5211 Grimmer Street, Burnaby BC</span></p>
				</div>
			</div>
			<div class="break"></div>
			<div class="item">
				<div class="projects" onclick="location.href='projects.php'">
					<img src="images/android.png" class="images_tabs" alt="Projects"
						width="240" height="280" />
					<h3>PROJECTS</h3>
				</div>
			</div>
			<div class="item">
				<div class="ideas" onclick="location.href='#'">
					<img src="images/android.png" class="images_tabs" alt="Ideas"
						width="240" height="280" />
					<h3>IDEAS</h3>
				</div>
			</div>
			<div class="item">
				<div class="accomp" onclick="location.href='#'">
					<img src="images/android.png" class="images_tabs"
						alt="Accomplishments" width="240" height="280" />
					<h3>ACCOMPLISHMENTS</h3>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
