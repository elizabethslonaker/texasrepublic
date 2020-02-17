<?php
	include ('shared.inc.php');
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Come shop for Texas-inspired gear at the Texas Republic Bar & Kitchen online store.">
		<meta name="author" content="Elizabeth Slonaker">
		<title>Shopping Cart - Texas Republic Bar & Kitchen </title>
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
		<h2>Your Shopping Cart</h2>
		<form action="checkout.php" method="post">
			<table class="table-checkout">
				<tr><th>Product(s)</th><th>Description</th><th>Quantity</th><th>Price</th></tr>
				<tr>
					<td><img src="images/koozie-2.png" alt="Texas Republic Fort Worth Store Koozie" width="25%"/></td>
					<td>Texas Republic Red Koozie</td>
					<td><input type="number" name="quantity" value ="1" min="1" max="10"></td>
					<td>$7.99</td>
				</tr>
				<tr><td colspan=2></td><th>Shipping: </th><th>$2.99</th></tr>
				<tr><td colspan=2></td><th>Total: </th><th>$9.98</th></tr>
				<tr><td colspan=3></td><td><a href='checkout.php'><input type='button' name='checkout' value='Checkout' class="btn-primary"></a></td></tr>
			</table>
		</form>

		<div class="flex">
			<h2>Products You Might Like</h2>
			<div class="col-3">
				<a href="store.php"><img src="images/drinkware.png" alt="Texas Republic Fort Worth Store Womens Apparel" class="product-img"/></a>
			</div>
			<div class="col-3">
				<a href="store.php"><img src="images/blanket.png" alt="Texas Republic Fort Worth Store Mens Apparel" class="product-img"></a>
			</div>
			<div class="col-3">
				<a href="store.php"><img src="images/womens.png" alt="Texas Republic Fort Worth Store Drinkware" class="product-img"></a>
			</div>
		</div>

  </main>

  <?php echo $footer ?>

	<script src="js/app.js"></script>

</body>
</html>
