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

	$result = mysqli_query($mysqli, "SELECT * FROM products WHERE productid=10");

	while($row = mysqli_fetch_array($result)) {
		$name = $row['name'];
		$description = $row['description'];
		$img = " <img src='".$row['image']."' class='fullwidth banner-image' />";
		$price = "$".$row['price'];
		$prerating = $row['rating'];
	}
	if ($prerating>=7){$rating="<span class='green'>".$prerating."</span>/10";}
	else if ($prerating<=4){$rating="<span class='red'>".$prerating."</span>/10";}
	else{$rating="<span class='yellow'>".$prerating."</span>/10";}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Bundle Hub Item - Josh Delgado</title>
    <?php include 'meta.html' ?>
</head>
<body>
	<?php include 'header.html'; ?>
	<main>
		<h2 class="text-center bundle-title">Angel: The Complete Series</h2>
		<div class="bundles">
			<div class="normal-bundle"><?php echo $img ?></div>
			<div class="featured-bundle"><?php echo $img ?></div>
		</div>
		<div class="container">
			<div class="flex child50">
				<div id="pay-extra">
					<div class="flex flex-center">
						<h3>About the Bundle</h3>
						<p><?php echo $rating ?></p>
					</div>
					<p>A spin-off of Buffy The vampire Slayer, and directed by the same Joss Whedon, this modern film-noir chronicles the adventures of Angel, a vampire detective in L.A. Follow Angel as he tries to redeem himself by helping those who can’t help themselves.</p>
				</div>
				<div id="pay-extra">
					<div class="flex flex-center">
						<h3>Pay What You Want</h3>
						<p><span class="green">Average Price: <?php echo $price ?></span></p>
					</div>
					<form class="pay-choice">
						<input type="radio" name="pay" value="50"> $50<br>
						<input type="radio" name="pay" value="30"> $30<br>
						<input type="radio" name="pay" value="20"> $20<br>
						<input type="radio" name="pay" value="10"> $10<br>
						<input type="radio" name="pay" value="other"> Other <input id="other-text" style="display:none;"type="text"><br>
					</form>
				</div>
				<div class="center">
					<input type="submit" class="center atc-button" value="Add to Cart"/>
				</div>
			</div>
		</div>
	</main>
	<?php include 'footer.html'; ?>
</body>
</html>