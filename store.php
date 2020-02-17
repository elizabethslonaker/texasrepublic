<?php
	include ('shared.inc.php');
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Come shop for Texas-inspired gear at the Texas Republic Bar & Kitchen online store.">
		<meta name="author" content="Elizabeth Slonaker">
		<title>Gear - Texas Republic Bar & Kitchen</title>
		<script src="https://kit.fontawesome.com/f3697dc76e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="CSS/styles.css">
	</head>
<body>

<?php
	print $banner;
	print $nav;
?>

	<main class="wrapper">
		<h1>Shop the Republic</h1>

		<div id="slider">
		    <figure>
		       <img src="images/store-1.png" alt="Texas Republic Fort Worth Store Products Slider 1"/>
		       <img src="images/store-2.png" alt="Texas Republic Fort Worth Store Products Slider 2"/>
		       <img src="images/store-3.png" alt="Texas Republic Fort Worth Store Products Slider 3"/>
					 <img src="images/store-1.png" alt="Texas Republic Fort Worth Store Products Slider 4"/> <!-- Repeat Image 1 so it loops back to that image-->
		    </figure>
		</div>

		<div class="flex">
			<h2>New Arrivals</h2>
				<div class="col-3">
					<a href="product.php"><img src="images/koozie-2.png" alt="Texas Republic Fort Worth Store Koozie" class="product-img"/></a>
					<h4>Texas Republic Red Koozie <br>$5.99</h4>
				</div>
				<div class="col-3">
					<a href="product.php"><img src="images/womens.png" alt="Texas Republic Fort Worth Store Womens Apparel" class="product-img"/></a>
					<h4>Womens Sweatshirt<br>$17.99</h4>
				</div>
				<div class="col-3">
					<a href="product.php"><img src="images/phonecase.png" alt="Texas Republic Fort Worth Store iPhone Case" class="product-img"/></a>
					<h4>Striped iPhone Case<br>$12.99</h4>
				</div>
			<h2>Tees & Apparel</h2>
				<div class="col-3">
					<a href="product.php"><img src="images/croptop.png" alt="Texas Republic Fort Worth Store Womens Apparel" class="product-img"/></a>
					<h4>Womens Croptop<br>$14.99</h4>
				</div>
				<div class="col-3">
					<a href="product.php"><img src="images/jacket.png" alt="Texas Republic Fort Worth Store Womens Apparel" class="product-img"/></a>
					<h4>Womens Pullover Jacket<br>$24.99</h4>
				</div>
				<div class="col-3">
					<a href="product.php"><img src="images/menstee.png" alt="Texas Republic Fort Worth Store Mens Tee" class="product-img"/></a>
					<h4>Mens Graphic Tee<br>$9.99</h4>
				</div>
			<h2>Drinkware</h2>
				<div class="col-3">
					<a href="product.php"><img src="images/mug.png" alt="Texas Republic Fort Worth Store White Mug" class="product-img"/></a>
					<h4>White Speckled Mug<br>$4.99</h4>
				</div>
				<div class="col-3">
					<a href="product.php"><img src="images/drinkware.png" alt="Texas Republic Fort Worth Store Drinkware" class="product-img"/></a>
					<h4>Texas Republic Black Koozie<br>$5.99</h4>
				</div>
				<div class="col-3">
					<a href="product.php"><img src="images/mug-2.png" alt="Texas Republic Fort Worth Store Red Mug" class="product-img"/></a>
					<h4>Red Speckled Mug <br>$4.99</h4>
				</div>
		</div>
  </main>

  <?php echo $footer ?>

	<script src="js/app.js"></script>

</body>
</html>
