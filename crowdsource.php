<?php
	include ('shared.inc.php');
?>

<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta name="description" content="Send your idea for a new drink item to add to the Texas Republic menu. Texas Republic Bar & Kitchen is an entertainment hotspot for food, drinks, and music located on West 7th Street in Fort Worth, Texas.">
    <meta name="author" content="Elizabeth Slonaker">
    <title>Submit Your Drink Idea - Texas Republic Bar & Kitchen</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
		<script src="https://kit.fontawesome.com/f3697dc76e.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<?php
			print $banner;
			print $nav;
		?>
		<div class="wrapper">
			<div class="flex crowdsource">
				<div class="col-2-sm">
					<img src="images/crowdsource-2.png" alt="Texas Republic Fort Worth People Having Fun">
				</div>
				<div class="col-2-lg">
					<h1>Got a drink idea?</h1>
					<h2>We want to hear it</h2>
					<p>Submit your idea for a new drink item to add to our menu. <br>Whether it’s a specialty cocktail, draft beer, or wine, the possibilities are endless!</p>
					<form action="crowdsource_script.php" method="post" id="form">
						<div class="inline">
							<div class="form-row">
								<label>First Name</label>
								<input type="text" name="firstName" value="<?php if (!empty($missing)) {echo htmlentities($_POST['firstName']);} ?>">
							</div>
							<div class="form-row">
								<label>Last Name</label>
								<input type="text" name="lastName" value="<?php if (!empty($missing)) {echo htmlentities($_POST['lastName']);} ?>" class="form-row-2">
							</div>
						</div>
						<label>Email</label>
						<input type="text" name="email" value="<?php if (!empty($missing)) {echo htmlentities($_POST['email']);} ?>"><br/>
						<br>
						<label>Tell us about your idea!</label>
						<textarea name="description" rows="10"><?php if (!empty($missing)) {echo $description;} ?></textarea><br>
						<div class="btn-container">
							<input type="Submit" name="submit" value="SEND" class="btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php echo $footer ?>
		<script src="js/app.js"></script>
    </body>
</html>
