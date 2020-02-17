<?php
	include ('shared.inc.php');
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Enjoy Texas-inspired food, drinks, and bar service at Texas Republic Bar & Kitchen, an entertainment hotspot for food, drinks, and music located on West 7th Street in Fort Worth, Texas.">
		<meta name="author" content="Elizabeth Slonaker">
		<title>Dining - Texas Republic Bar & Kitchen </title>
		<script src="https://kit.fontawesome.com/f3697dc76e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="CSS/styles.css">
	</head>

<body>
<?php
	print $banner;
	print $nav;
?>
	<main class="wrapper">
	<h1>Texas Inspired Dining</h1>
	<div id="slider">
			<figure>
				 <img src="images/barkit-3.png" alt="Texas Republic Fort Worth Dining Slider 1"/>
				 <img src="images/barkit-2.png" alt="Texas Republic Fort Worth Dining Slider 2"/>
				 <img src="images/barkit-4.png" alt="Texas Republic Fort Worth Dining Slider 3"/>
				 <img src="images/barkit-3.png" alt="Texas Republic Fort Worth Dining Slider 4"/> <!-- Repeat Image 1 so it loops back to that image-->
			</figure>
	</div>

	<div class="container">
		<div class="menu-imgs">
			<div>
				<h4>Brunch Menu</h4>
				<a href="images/brunch-menu.png"><img src="images/brunch-menu.png" alt="Texas Republic Fort Worth Dining Menu" width="200" height="200"></a>
			</div>
			<div>
				<h4>Food Menu</h4>
				<a href="images/food-menu.png"><img src="images/food-menu.png" alt="Texas Republic Fort Worth Dining Menu" width="200" height="200"></a>
			</div>
			<div class="drink-menu-container">
				<h4>Drink Menu</h4>
				<a href="images/drink-menu.png"><img src="images/drink-menu.png" alt="Texas Republic Fort Worth Dining Menu"  width="200" height="200"></a>
			</div>
			<div>
				<h4>Bottle Menu</h4>
				<a href="images/bottle-menu.png"><img src="images/bottle-menu.png" alt="Texas Republic Fort Worth Dining Menu" width="200" height="200"></a>
	 		</div>
		</div>
	</div>

	<div class="container">
		<div class="flex">
			<h2>Bottle Service</h2>
			<div class="col-3">
				<img src="images/bottle-ser-1.jpg" alt="Texas Republic Fort Worth Dining Bottle Service">
				<h3>Car Bottle Service <br><span class="white">$800</span></h3>
			</div>
			<div class="col-3">
				<img src="images/bottle-ser-2.jpg" alt="Texas Republic Fort Worth Dining Bottle Service">
				<h3>Bae Watch Service <br><span class="white">$1000</span></h3>
			</div>
			<div class="col-3">
				<img src="images/bottle-ser-3.jpg" alt="Texas Republic Fort Worth Dining Bottle Service">
				<h3>Tractor Bottle Service <br><span class="white">$1500</span></h3>
			</div>
		</div>
	</div>
</main>

<?php echo $footer ?>

<script src="js/app.js"></script>

</body>
</html>
