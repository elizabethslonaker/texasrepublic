<?php
	include ('shared.inc.php');
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Book your next event or special occasion with Texas Republic and enjoy a high energy environment with good food, drinks, and music! Texas Republic Bar & Kitchen is an entertainment hotspot located on West 7th Street in Fort Worth, Texas.">
		<meta name="author" content="Elizabeth Slonaker">
		<title>Private Events & Catering - Texas Republic Bar & Kitchen</title>
		<script src="https://kit.fontawesome.com/f3697dc76e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="CSS/styles.css">
	</head>
<body>

<?php
	print $banner;
	print $nav;
?>

	<main class="wrapper">
		<h1>Private Events & Catering</h1>
			<h2>Do Your Next Occasion, <br>The Texas Republic Way</h2>
			<div class="flex">
				<div class="col-3 event">
					<img src="images/birthday.png" alt="Texas Republic Fort Worth Private Events - Birthdays, Anniversarys, Wedding Rehearsals">
					<h3>Birthdays<br> Anniversarys<br> Wedding Rehearsals</h3>
				</div>
				<div class="col-3 event">
					<img src="images/private-events.jpg" alt="Texas Republic Fort Worth Private Events - Corporate Events">
					<h3>Corporate Events<br>Networking Events<br>Office Happy Hour</h3>
				</div>
				<div class="col-3 event">
					<img src="images/football.png" alt="Texas Republic Fort Worth Private Events - Special Occasions">
					<h3>Live Sunday Night Football<br>Watch Parties</h3>
				</div>
			</div>

			<div class="flex">
				<div class="col-2-sm">
					<a href="/txr/images/event-packet-1.jpg"><img src="images/event-packet-1.jpg" alt="Texas Republic Fort Worth Event Packet Page 1"></a>
					<a href="/txr/images/event-packet-1.jpg"><img src="images/event-packet-2.jpg" alt="Texas Republic Fort Worth Event Packet Page 2"></a>
				</div>
				<div class="col-2-lg events-form">
					<h1>Online Booking</h1>
					<p>Please use the form below to submit a private event or catering inquiry. <br>A member from the Texas Republic Team will be in contact with you shortly.</p>
					<form action="private_events_script.php" method="post" id="form">
						<div class="inline">
							<div class="form-row">
								<label>First Name</label>
								<input type="text" name="firstName" value="<?php if (!empty($missing)) {echo htmlentities($_POST['firstName']);} ?>"><br/>
							</div>
							<div class="form-row form-row-2">
								<label>Last Name</label>
								<input type="text" name="lastName" value="<?php if (!empty($missing)) {echo htmlentities($_POST['lastName']);} ?>"><br/>
							</div>
						</div>

						<div class="inline">
							<div class="form-row">
								<label>Email</label>
								<input type="email" name="email" value="<?php if (!empty($missing)) {echo htmlentities($_POST['email']);} ?>"><br/>
							</div>
							<div class="form-row form-row-2">
								<label>Phone Number</label>
								<input type="tel" name="phone" value="<?php if (!empty($missing)) {echo htmlentities($_POST['phone']);} ?>"><br/>
							</div>
						</div>

						<div class="inline">
							<div class="form-row">
								<label>Date & Time</label>
								<input type="datetime-local" name="date" placeholder="Date" value="<?php if (!empty($missing)) {echo htmlentities($_POST['date']);} ?>"><br/>
							</div>
							<div class="form-row form-row-2">
								<label>Guests (Estimate)</label>
								<input type="text" name="number" value="<?php if (!empty($missing)) {echo htmlentities($_POST['number']);} ?>"><br/>
							</div>
						</div>

						<div class="inline">
							<div class="form-row">
								<label>Type of Event</label><br>
								<input type="radio" name="event" value="Event" checked>Private Event<br>
								<input type="radio" name="event" value="Catering">Catering<br>
							</div>
							<div class="form-row form-row-2">
								<label>Rooms (Private Events Only)</label><br>
								<input type="radio" name="room" value="Full Venue" checked>Full Venue (1,050)<br>
								<input type="radio" name="room" value="Front Yard">Front Yard (200)<br>
								<input type="radio" name="room" value="Lower Dining">Lower Dining (350)<br>
								<input type="radio" name="room" value="Rooftop Patio">Rooftop Patio (500)<br>
							</div>
						</div>

						<div class="inline">
							<div class="form-row">
								<label>Beverage Packages</label><br>
								<input type="radio" name="beverage" value="Option 1" checked>Option 1<br>
								<input type="radio" name="beverage" value="Option 2">Option 2<br>
								<input type="radio" name="beverage" value="Option 3">Option 3<br>
								<input type="radio" name="beverage" value="Option 4">Option 4<br>
								<input type="radio" name="beverage" value="Option 5">Option 5<br>
								<input type="radio" name="beverage" value="Option 6">Option 6<br>
							</div>
							<div class="form-row form-row-2">
								<label>Food Packages</label><br>
								<input type="radio" name="food" value="Option 1" checked>Option 1<br>
								<input type="radio" name="food" value="Option 2">Option 2<br>
								<input type="radio" name="food" value="Option 3">Option 3<br>
							</div>
						</div>

						<p>Please describe any additional services, custom packages, special requests & accommodations.</p>
						<textarea name="description" rows="10"><?php if (!empty($missing)) {echo $description;} ?></textarea><br>

						<div class="btn-container">
							<input type="Submit" name="send" value="SEND" class="btn-primary">
						</div>
					</form>
				</div>
			</div>
	</main>

	<?php echo $footer ?>

	<script src="js/app.js"></script>

</body>
</html>
