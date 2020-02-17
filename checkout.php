<?php
	include ('shared.inc.php');
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Come shop for Texas-inspired gear at the Texas Republic Bar & Kitchen online store.">
		<meta name="author" content="Elizabeth Slonaker">
		<title>Checkout - Texas Republic Bar & Kitchen </title>
		<script src="https://kit.fontawesome.com/f3697dc76e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="CSS/styles.css">
	</head>
<body>

<?php
	print $banner;
	print $nav;
?>

  <main class="wrapper">
		<h1>Checkout</h1>
		<h2>Summary</h2>
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

		<div class="inline">
			<div class="col-2">
				<h3>Contact Details</h3>
				<form class="form-billing" action="checkout_script.php" method="post" id="form">
					<div class="inline">
						<div class="form-row">
							<label>First Name</label>
							<input type="text" name="firstName">
						</div>
						<div class="form-row">
							<label>Last Name</label>
							<input type="text" name="lastName" class="form-row-2">
						</div>
					</div>
					<label>Address</label>
					<input type="text" name="address"><br>
					<label>City</label>
					<input type="text" name="city"><br>
					<div class="inline">
						<div class="form-row">
							<label>State</label>
							<input type="text" name="state">
						</div>
						<div class="form-row">
							<label>Zip</label>
							<input type="text" name="zip" class="form-row-2">
						</div>
					</div>
				</form>

				<h3>Billing Details</h3>
				<form class="form-billing" action="checkout_script.php" method="post" id="form">
					<label>Cardholder Name</label>
					<input type="text" name="ccn"><br>
					<div class="inline">
						<div class="form-row">
							<label>Card Type</label>
							<input type="text" name="cct"><br>
						</div>
						<div class="form-row">
							<label>Card Number</label>
							<input type="text" name="ccn" class="form-row-2">
						</div>
					</div>
					<div class="inline">
						<div class="form-row">
							<label>CVV</label>
							<input type="text" name="ccv"><br>
						</div>
						<div class="form-row">
							<label>Ex Date</label>
							<input type="text" name="cce" class="form-row-2">
						</div>
					</div>
				</form>
			</div>

			<div class="col-2">
				<h3>Shipping Details</h3>
				<form class="form-billing" action="checkout_script.php" method="post" id="form">
					<div class="inline">
						<div class="form-row">
							<label>First Name</label>
							<input type="text" name="firstName">
						</div>
						<div class="form-row">
							<label>Last Name</label>
							<input type="text" name="lastName" class="form-row-2">
						</div>
					</div>
					<label>Shipping Address</label>
					<input type="text" name="address"><br>
					<label>City</label>
					<input type="text" name="city"><br>
					<div class="inline">
						<div class="form-row">
							<label>State</label>
							<input type="text" name="state">
						</div>
						<div class="form-row">
							<label>Zip</label>
							<input type="text" name="zip" class="form-row-2">
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="btn-container">
			<a href="checkout-success.php"><input type='button' name='action' value='Purchase' class="btn-primary"></a>
		</div>
  </main>

  <?php echo $footer ?>

	<script src="js/app.js"></script>

</body>
</html>
