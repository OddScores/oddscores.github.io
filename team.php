<!DOCTYPE html>
<html>
	<?php include('header.php'); ?>
    <?php include('team-list.php'); ?>
    <link rel="stylesheet" type="text/css" href="team.css">
	<main>
	<section class="team">
		<div class="container">
			<h1>Meet the Team</h1>
			<p>Here are the team members of Pink-Eye Pictures:</p>
		</div>
	</section>

    <section class="members">
        <div class="container">
            <div class="team-member">
                <?php foreach ($team_members as $member): ?>
                    <div class="team-member">
                    <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
                    <h2><?php echo $member['name']; ?></h2>
                    <p class="position"><?php echo $member['position']; ?></p>
                    <p class="bio"><?php echo $member['bio']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="collab">
        <div class="container">
            <h1>Collaborators</h1>
            <p>Here are some of the collaborators that Pink-Eye Pictures has worked with:</p>
        </div>
        </section>

	<section class="collaborators">
		<div class="container">
			<h2>Collaborators</h2>
			<p>Here are some of the collaborators that Pink-Eye Pictures has worked with:</p>
			<ul class="collaborator-list">
				<li>
					<div class="collaborator">
						<div class="collaborator-image" style="background-image: url('collaborator1-image.jpg');"></div>
						<div class="collaborator-info">
							<h3>Mic-on-Mic</h3>
							<p>Collaboration Type: Music</p>
							<p>Mic-on-Mic has worked with Pink-Eye Pictures on several projects in the past, and has been instrumental in making our films feel that much stronger.</p>
						</div>
					</div>
				</li>
				<!-- Add more <li> elements for each collaborator you want to display -->
			</ul>
		</div>
	</section>
	</main>

	<?php include('footer.php'); ?>
</html>