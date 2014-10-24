<!DOCTYPE HTML>
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
				<table class="text-center">
					<tr class="title">
						<td>Item</td>
						<td>Description</td>
						<td>Price</td>
					</tr>
					<tr>
						<td>Edgar Wright Bundle</td>
						<td>It's a Bundle!</td>
						<td>$13</td>
					</tr>
					<tr>
						<td>Douglas Adams Bundle</td>
						<td>It's a Bundle!</td>
						<td>$8.50</td>
					</tr>
					<tr>
						<td>Health App Bundle</td>
						<td>It's a Bundle!</td>
						<td>$5</td>
					</tr>
				</table>
				<a href="" id="edit">Edit Cart</a>
			</div>
			<div class="width25">
				<h3>Order Summary</h3>
				<table>
					<tr>
						<td>Subtotal:</td>
						<td>$24.50</td>
					</tr>
					<tr>
						<td>Tax:</td>
						<td>$1.72</td>
					</tr>
					<tr>
						<td>Discount:</td>
						<td>--</td>
					</tr>
					<tr class="title">
						<td>Total:</td>
						<td>$26.42</td>
					</tr>
				</table>
			</div>
			<div class="promo">
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