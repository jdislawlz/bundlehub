<?php
    include 'php/functions.php';
?>
<html>
<head>
    <title>Bundle Hub Client - Josh Delgado</title>
    <?php include 'meta.html' ?>
</head>
<body>
	<?php include 'header.html'; ?>
	<main>
		<div class="container client">
			<h2>Welcome <span class="red">[</span><?php echo $user ?><span class="red">]</span></h2>
			<hr>
			<ul class="flex">
				<a href=# id="nav_account"><li>Account Info</li></a>
				<a href=# id="nav_payment"><li>Payment Information</li></a>
				<a href=# id="nav_address"><li>Address Book</li></a>
				<a href=# id="nav_orders"><li>Order Management</li></a>
				<a href=# id="nav_logout"><li>Log Out</li></a>
			</ul>
			<div id="client_selection">
			<div id="client_account" class="client_item">
				<h3>Account Info</h3>
				<div class="inner-container">
				<form class="child50">
					<h4>Name Information</h4>
					<div class="flex flex-center" >
						<label for="email">Email Address:</label>
						<input type="text" name="email">
					</div>
					<div class="flex flex-center" >
						<label for="first-name">First Name:</label>
						<input type="text" name="first-name">
					</div>
					<div class="flex flex-center" >
						<label for="last-name">Last Name:</label>
						<input type="text" name="last-name">
					</div>
					<h4>Password</h4>
					<div class="flex flex-center" >
						<label for="new-password">New Password</label>
						<input type="text" name="new-password">
					</div>
					<div class="flex flex-center" >
						<label for="confirm-password">Confirm Password</label>
						<input type="text" name="password">
					</div>
					<h4>Subscribe to Email Newsletter?</h4>
					<input type="radio" name="subscribe" value="yes"><label> Yes</label><br>
					<input type="radio" name="subscribe" value="no"><label> No</label><br>
					<input type="submit" value="Update">
				</form>
				</div>
			</div>
			<div id="client_payment" class="client_item" style="display:none">
				<h3>Payment Information</h3>
				<div class="inner-container">
				<h4>Credit &amp; Debit Cards</h4>
				<table>
					<tr class="title">
						<td>Card</td>
						<td>Exp Date</td>
						<td>Name on Card</td>
						<td>Billing Address</td>
					</tr>
					<tr>
						<td>Visa ending in 4568</td>
						<td>8/2017</td>
						<td>Calvin Harris</td>
						<td>3716 Goldenrod Ave, Ponca City, OK</td>
					</tr>
				</table>
				<h4>Add New Card</h4>
				<form class="child50">
					<div class="flex flex-center" >
						<label for="card-number">Card Number</label>
						<input name="card-number" type="text">
					</div>
					<div class="flex flex-center" >
						<label for="card-name">Name on Number</label>
						<input name="card-name" type="text">
					</div>
					<div class="flex flex-center" >
						<label for="expiration">Expiration Date</label>
						<div>
						<select name="expiration">
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
						<select name="expiration">
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
						</div>
					</div>
					<div class="flex flex-center" >
						<label for="cvc">CVC</label>
						<input name="cvc" type="text">
					</div>
					<input type="submit" value="Add Card">
				</form>
				</div>
			</div>
			<div id="client_address" class="client_item" style="display:none">
				<h3>Address Book</h3>
				<div class="inner-container">
				<h4>Saved Addresses</h4>
				<table>
					<tr class="title">
						<td>Remove</td>
						<td>Billing</td>
						<td>Shipping</td>
						<td>Name</td>
						<td>Address</td>
						<td></td>
					</tr>
					<tr>
						<td>x</td>
						<td><input type="radio" name="billing" value="1"></td>
						<td><input type="radio" name="shipping" value="1"></td>
						<td>John Hopkins</td>
						<td>3716 Goldenrod Ave, Ponca City, OK</td>
						<td>Edit</td>
					</tr>
					<tr>
						<td>x</td>
						<td><input type="radio" name="billing" value="2"></td>
						<td><input type="radio" name="shipping" value="2"></td>
						<td>John Hopkins</td>
						<td>8309 Crescent Moon dr, New Port Richey, FL</td>
						<td>Edit</td>
					</tr>
				</table>
				<h4>Add New Address</h4>
				<form>
					<div class="flex child50">
						<div class="flex flex-center" >
							<label for="first-name">First Name:</label>
							<input type="text">
						</div>
						<div class="flex flex-center" >
							<label for="last-name">Last Name:</label>
							<input type="text">
						</div>
						<div class="flex flex-center" >
							<label for="company">Company:</label>
							<input type="text">
						</div>
						<div class="flex flex-center" >
							<label for="phone">Phone:</label>
							<input type="text">
						</div>
						<div class="flex flex-center" >
							<label for="street1">Street 1:</label>
							<input type="text">
						</div>
						<div class="flex flex-center" >
							<label for="street2">Street 2:</label>
							<input type="text">
						</div>
						<div class="flex flex-center" >
							<label for="city">City:</label>
							<input type="text">
						</div>
						<div class="flex flex-center" >
							<label for="state">State:</label>
							<input type="text">
						</div>
						<div class="flex flex-center" >
							<label for="zip">Zip:</label>
							<input type="text">
						</div>
						<div class="flex flex-center" >
							<label for="country">Country:</label>
							<input type="text">
						</div>
					</div>
					<input class="clear" type="submit" value="Add Address">
				</form>
				</div>
			</div>
			<div id="client_orders" class="client_item" style="display:none">
				<h3>Order Management</h3>
				<div class="inner-container">
					<h4>Order History</h4>
					<table>
						<tr class="title">
							<td>Order Date</td>
							<td>Order ID</td>
							<td>Order Total</td>
							<td>Ship To</td>
							<td>Status</td>
						</tr>
						<tr>
							<td>Marchtember 1th</td>
							<td>d5d-rt51</td>
							<td>$15</td>
							<td>John Hopkins</td>
							<td>Shipped</td>
						</tr>
						<tr>
							<td>July 49th</td>
							<td>d5d-4568</td>
							<td>$10</td>
							<td>John Hopkins</td>
							<td>Completed</td>
						</tr>
					</table>
				</div>
			</div>
			</div>
		</div>
	</main>
	<?php include 'footer.php'; ?>
</body>
</html>