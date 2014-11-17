<?php
	include 'php/functions.php';
	$prices = $_SESSION['prices'];
	$length = strlen($prices);
	if($length>0){
		$subtotal = number_format(substr($prices,0,2),2);
	} if($length>2){
		$subtotal = $subtotal+number_format(substr($prices,2,2),2);
	} if($length>4){
		$subtotal = $subtotal+number_format(substr($prices,4,2),2);
	} if($length>6){
		$subtotal = $subtotal+number_format(substr($prices,6,2),2);
	} if($length>8){
		$subtotal = $subtotal+number_format(substr($prices,8,2),2);
	}
	$tax = number_format($subtotal * .060,2);
	$total = number_format($subtotal+$tax,2);
?>
<html>
<head>
    <title>Bundle Hub Payment - Josh Delgado</title>
    <?php include 'meta.html' ?>
</head>
<body>
	<?php include 'header.html'; ?>
	<main>
		<div class="container flex">
			<div class="width75">
				<h3>Items You're Purchasing</h3>
				<?php displayCart($con,$_SESSION['items'],$_SESSION['prices']); ?>
			</div>
			<div class="width25">
				<h3>Order Summary</h3>
				<table>
					<tr>
						<td>Subtotal:</td>
						<td>$<?php echo $subtotal ?></td>
					</tr>
					<tr>
						<td>Tax:</td>
						<td>$<?php echo $tax; ?></td>
					</tr>
					<tr>
						<td>Discount:</td>
						<td>--</td>
					</tr>
					<tr class="title">
						<td>Total:</td>
						<td>$<?php echo $total ?></td>
					</tr>
				</table>
			</div>
			<div class="promo">
				<a href="cart.php">Edit Cart</a><br><br>
				<label>Promo Code</label>
				<input type="text" value="">
				<input type="submit" value="Apply">
			</div>
			<div class="fullwidth payment-options">
				<h3>Payment Options</h3>
				<div class="flex fullwidth">
					<div style="flex-grow:1;">
						<h4>Payment Type</h4>
						<form>
							<input type="radio" name="pay-type" value="Credit Card">Credit Card<br>
							<input type="radio" name="pay-type" value="PayPal">Paypal
						</form>
					</div>
					<div style="flex-grow:1;">
						<h4>Billing Address</h4>
						<address>Josh Delgado<br>
							3716 Goldenrod Ave<br>
							Ponca City, OK</address>
						<h4>Send Receipt To</h4>
						<input type="text" value="Email.address@server.com">
					</div>
					<div style="flex-grow:2;">
						<h4>Credit Card Info</h4>
						<form>
							<div class="flex child50">
								<label for="card-number">Card Number</label>
								<input name="card-number" type="text">
							</div>
							<div class="flex child50">
								<label for="card-name">Name on Number</label>
								<input name="card-name" type="text">
							</div>
							<div class="flex child50">
								<label for="expiration">Expiration Date</label>
								<div>
									<select name="expiration" class="float-right">
										<option>2014</option>
										<option>2015</option>
										<option>2016</option>
										<option>2017</option>
										<option>2018</option>
										<option>2019</option>
										<option>2020</option>
										<option>2021</option>
										<option>2022</option>
										<option>2023</option>
										<option>2024</option>
										<option>2025</option>
									</select>
									<select name="expiration" class="float-right">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
									</select>
								</div>
							</div>
							<div class="flex child50">
								<label for="cvc">CVC</label>
								<input name="cvc" type="text">
							</div>
							<input type="submit" value="Place Order">
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include 'footer.html'; ?>
</body>
</html>