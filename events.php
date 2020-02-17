<?php
	include ('shared.inc.php');
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Purchase tickets, private tables, and bottle service to Texas Republic events, an entertainment hotspot located on West 7th Street in Fort Worth, TX.">
		<meta name="author" content="Elizabeth Slonaker">
		<title>Event Calendar - Texas Republic Bar & Kitchen</title>
		<script src="https://kit.fontawesome.com/f3697dc76e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="CSS/styles.css">
	</head>
<body>

<?php
	print $banner;
	print $nav;
?>

	<main class="wrapper">
		<div class="container">
		<h1>Event Calendar</h1>
		<div class="flex">
			<div class="col-3 event">
				<img src="images/event1.jpg" alt="Texas Republic Fort Worth Event - Masvidal v Diaz">
				<h3>Masvidal v Diaz</h3>
				<p>Saturday, November 2, 2019<br>6:00 PM</p>

				<!-- Modal button -->
				<a id="myBtn" class="btn-tertiary">Info</a>
				<!-- The Modal -->
				<div id="myModal" class="modal">
				<!-- Modal content -->
					<div class="modal-content">
						<div class="modal-header">
							<span class="close">&times;</span>
							<h3>Masvidal v Diaz</h3>
						</div>
						<div class="modal-body">
							<img src="images/event1.jpg" alt="Texas Republic Fort Worth Event - Masvidal v Diaz"/>
							<p>Catch all of the UFC Action on our 168SF Mega screen!</p>
							<p>Sunday, November 2, 2019 @6:00PM</p>
							<p>20 massive LED TVs<br>140sf Rooftop Megatron<br>The Original 168sf Megatron downstairs</p>
							<p>For VIP Tables or more info please call (817) 887-9797</p>
						</div>
						<div class="modal-footer">
							<p>Texas Republic Bar & Kitchen | 945 Foch ST Fort Worth, TX 76107</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-3 event">
				<img src="images/event2.jpg" alt="Texas Republic Fort Worth Event - Live Sunday Football">
				<h3>Live Sunday Football</h3>
				<p>Sunday, November 24, 2019<br>11:00 AM</p>
				<!-- can't do more than one popup because it uses id's. tried changing everything to classes and it din't work. -->
				<a id="myBtn" class="btn-tertiary">Info</a>
			</div>

			<div class="col-3 event">
				<img src="images/event3.jpg" alt="Texas Republic Fort Worth Event - Thanksgiving Bash">
				<h3>Thanksgiving Bash</h3>
				<p>Wednesday, November 27, 2019<br>7:00 PM</p>
				<a href="#" class="btn-tertiary">Info</a>
			</div>
			<div class="col-3 event">
				<img src="images/event4.png" alt="Texas Republic Fort Worth Event - Stranger Things">
				<h3>Stranger Things Bar Crawl</h3>
				<p>Saturday, December 7, 2019<br>2:00 PM</p>
				<a href="#" class="btn-tertiary">Info</a>
			</div>
			<div class="col-3 event">
				<img src="images/event6.png" alt="Texas Republic Fort Worth Event - New Year's">
				<h3>New Year's Eve 2020</h3>
				<p>Tuesday, December 31, 2019<br>8:00 PM</p>
				<a href="#" class="btn-tertiary">Info</a>
			</div>
			<div class="col-3 event">
				<img src="images/event5.png" alt="Texas Republic Fort Worth Event - Grey's Anatomy Bar Crawl">
				<h3>Grey’s Anatomy Bar Crawl</h3>
				<p>Saturday, January 18, 2020<br>2:00 PM</p>
				<a href="#" class="btn-tertiary">Info</a>
			</div>
		</div>
	</div>

		<div class="flex container">
			<div class="col-2">
				<a href="private_events.php"><img src="images/private-events.jpg" alt="Texas Republic Fort Worth Dining">
				<h2>Private Events & Catering</h2></a>
				<p class="p">Birthdays, anniversarys, corporate events, wedding rehearsals... Do your next occasion, the Texas Republic way!</p>
			</div>
			<div class="col-2">
				<a href="crowdsource.php"><img src="images/drinks.jpg" alt="Texas Republic Fort Worth - Submit Your Drink Idea">
				<h2>Your Idea</h2></a>
				<p>Share your idea for a new drink with the Texas Republic Team.</p>
			</div>
		</div>
	</main>

	<?php echo $footer ?>

	<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal
		btn.onclick = function() {
  		modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
  		modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
  		if (event.target == modal) {
    		modal.style.display = "none";
  		}
		}
	</script>

	<script src="js/app.js"></script>

</body>
</html>
