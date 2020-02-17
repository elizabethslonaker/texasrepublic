<?php
	include ('shared.inc.php');
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Come shop for Texas-inspired gear at the Texas Republic Bar & Kitchen online store.">
		<meta name="author" content="Elizabeth Slonaker">
		<title>Store Product - Texas Republic Bar & Kitchen</title>
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
		<div class="flex">
			<div class="product-row">
				<img src="images/koozie-2.png" alt="Texas Republic Fort Worth Store Koozie" width="100%"/>
			</div>
			<div class="product-row">
				<h2>Texas Republic Red Koozie</h2>
				<h2>$7.99</h2>
				<p>Red Koozie with Texas Republic logo</p>
				<form action="shopping-cart.php" method="post">
					<input type="number" name="quantity" value ="1" min="1" max="10">
					<input type="Submit" name="add" value="ADD TO CART" class="btn-tertiary">
				</form>
			</div>
		</div>


  </main>

  <?php echo $footer ?>

	<script src="js/app.js"></script>

</body>
</html>
