<?php
	include ('shared.inc.php');
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Come shop for Texas-inspired gear at the Texas Republic Bar & Kitchen online store.">
		<meta name="author" content="Elizabeth Slonaker">
		<title>Checkout Success - Texas Republic Bar & Kitchen</title>
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
		<h2>Success! Your order was placed</h2>
		<p class="center">Thank you for shopping at Texas Republic! The items below will be shipped to you within 5 business days.</p>
		<p class="center">Your tracking number is 76827493. To check your order status, please go to the <a href="#">Order Tracking Page</a></p>
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
		</table>
  </main>

  <?php echo $footer ?>

	<script src="js/app.js"></script>

</body>
</html>
