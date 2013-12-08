<?php include 'header.php'; ?>
<!-- CONTENT -->
<div id="content">
	<div class="item">
		<div id="about" onclick="location.href('about.php')"
			class="slide-transition skin">
			<h3>ABOUT</h3>
			<p>Hello, my name is Brycen Dorsay and I am into website and mobile
				application development. I am taking Computer Systems Technology at
				British Columbia Institute of Technology. Welcome to my portfolio
				page full of my past and future creations.</p>
		</div>
	</div>
	<div class="item">
		<div id="contact"
			class="skin click-fade">
			<h3>CONTACT</h3>
			<div class="contact-left">
				Email:<br>Phone:<br>Occupation:
			</div>
			<div class="contact-right">
				dorsay@live.ca<br>1 (250) 937-7361<br>Student/Website Architect
			</div>
		</div>
		<div class="contact-reveal">
			<br><h1>THANKS FOR <br>CHATTING WITH ME!</h1>
		</div>
	</div>
	<div class="break"></div>
	<div class="item">
		<div id="projects" onclick="location.href('projects.php')"
			class="slide-transition skin">
			<img src="images/android.png" class="images-tabs" alt="Projects"
				width="240" height="280" />
			<h3>PROJECTS</h3>
		</div>
	</div>
	<div class="item">
		<div id="ideas" class="slide-transition skin"
			onclick="location.href='#'">
			<img src="images/wordpress.png" class="images-tabs"
				alt="Ideas" />
			<h3>IDEAS</h3>
		</div>
	</div>
	<div class="item">
		<div id="resume" class="skin">
			<div class="images-tabs-small" >
				<a href="resume.pdf" class="download-btn" width="280px" height="97px"></a>
			</div>
			<h3>RÉSUMÉ</h3>
		</div>
	</div>
	<div class="item">
		<div id="source" class="skin">
			<div class="images-tabs-small highlight">
				<a href="source.zip" class="download-btn" style="display: block;" width="280px" height="97px"></a>
			</div>
			<h3>PAGE SOURCE</h3>
		</div>
	</div>
</div>
<!-- FOOTER -->
<?php include 'footer.php'?>