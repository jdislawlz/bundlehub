<?php
	$mysqli = new mysqli('localhost', 'root', 'root', 'bundlehub');

	$errnum=mysqli_connect_errno();
	if ($errnum)
	{
     	$errmsg=mysqli_connect_error();
		print "Connect failed. error number=$errnum<br />
        		error message=$errmsg";
		exit();
	}

	$result = mysqli_query($mysqli, "SELECT * FROM products WHERE productid=6");

	while($row = mysqli_fetch_array($result)) {
		$name = $row['name'];
		$price = $row['price'];
		$img = " <img src='".$row['image']."' class='fullwidth banner-image' />";
	}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Bundle Hub Home - Josh Delgado</title>
    <?php include 'meta.html' ?>
</head>
<body>
	<?php include 'header.html'; ?>
	<main>
		<div class="banner-wrapper"><img src="http://placehold.it/1600x350&text=+" class="banner-image width100" /></div>
		<div class="container">
			<div class="flex child50">
				<div>
					<div>
						<h3>Sign Up for our Newsletter</h3>
						<p>TWant to keep up to date with the happenings at The Bundle Hub? Sign up for our newsletter and you’ll be one of the first to hear about limited-run bundles and promotional prices. We’ll showcase the week’s new bundles so you never miss a thing. Happy bundling!</p>
						<form class="float-right">
							<input type="text" name="newsletter" value="name@server.com">
							<input class="submit-fix" type="submit" value="Sign Up">
						</form>
					</div>
				</div>
				<hr>
				<div class="second-block">
					<h3>Featured Bundle</h3>
					<div class="flex flex-end">
						<h4><?php echo $name ?></h4>
						<p>Pay above <span class="green">$<?php echo $price ?></span> to get everything!</p>
					</div>
					<?php echo $img ?>
					<div>
						<form class="pay-choice flex flex-center space-around">
							<div><input type="radio" name="pay" value="50"> $50<br></div>
							<div><input type="radio" name="pay" value="30"> $30<br></div>
							<div><input type="radio" name="pay" value="20"> $20<br></div>
							<div><input type="radio" name="pay" value="10"> $10<br></div>
							<div><input type="radio" name="pay" value="other"> Other<input id="other-text" style="display:none;"type="text"><br></div>
						</form>
					</div>
					<div class="center">
						<input type="submit" class="center atc-button" value="Add to Cart"/>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include 'footer.html'; ?>
</body>
</html>