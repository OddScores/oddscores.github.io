<!DOCTYPE html>
<html>
	<?php include("header.php"); ?>
	<main>
        <!-- !!!Needs Work!!! -->
		<section class="hero">
			<div class="container">
				<h1>Project Timeline</h1>
				<h2>Our timeline that shows the progress of Pink-Eye Pictures as a company</h2>
				<!-- Add project timeline here -->
			</div>
		</section>
		
		<section class="project-list">
			<div class="container">
				<h2>Projects</h2>
				<ul class="project-grid">
					<li>
						<a href="project1.php" class="project-link">
							<div class="project-image" style="background-image: url('project1-image.jpg');">
								<!-- Can also use a <video> element here to display a video instead of an image -->
							</div>
							<div class="project-info">
								<h3>Project 1</h3>
								<p>A brief description of project 1 and its significance.</p>
								<button class="cta-button">Contact Us</button>
							</div>
						</a>
					</li>
					<!-- Add more <li> elements for each project we want to display -->
				</ul>
			</div>
		</section>
	</main>
	<?php include("footer.php"); ?>
</html>