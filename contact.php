<!DOCTYPE html>
<html>
	<?php include("header.php"); ?>
    <link rel="stylesheet" type="text/css" href="form.css">
	<main>
		<section class="contact">
			<div class="container">
				<h1>Contact Us</h1>
				<p>Feel free to contact us if you have any questions or if you would like to inquire about our services.</p>
				<form action="contact.php" method="post">
					<label for="name">Name</label>
					<input type="text" id="name" name="name" required>

					<label for="email">Email</label>
					<input type="email" id="email" name="email" required>

					<label for="phone">Phone Number</label>
					<input type="tel" id="phone" name="phone" required>

					<label for="message">Message</label>
					<textarea id="message" name="message" required></textarea>

					<input type="submit" value="Send">
				</form>
			</div>
		</section>
		<section class="contact-info">
			<div class="container">
				<h2>Additional Contact Information</h2>
				<p>Phone: 555-555-5555</p>
				<p>Email: info@pinkeyepictures.com</p>
				<p>Address: 123 Main St, Anytown USA</p>
			</div>
		</section>
	</main>
    <?php include("footer.php"); ?>
</html>