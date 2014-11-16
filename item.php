<?php
	include 'php/functions.php';
    $item=$_GET['item'];
?>
<html>
<head>
    <title>Bundle Hub Item - Josh Delgado</title>
    <?php include 'meta.html' ?>
</head>
<body>
	<?php include 'header.html'; ?>
	<main>
		<div class="container">
			<h2 class="text-center"><?php echo displayItemPage($con,$item)['name']; ?> <span class="font-small">[<span class="green"><?php echo displayItemPage($con,$item)['rating']; ?></span>/10]</span></h2>
			<?php echo displayItemPage($con,$item)['img']; ?>
			<div class="flex child50">
				<div>
					<h3>About the Bundle</h3>
					<p><?php echo displayItemPage($con,$item)['desc']; ?></p>
				</div>
				<div>
					<h3>Pay What You Want <span class="font-small green"><span class="font-small"> Average Price: <?php echo displayItemPage($con,$item)['price']; ?></span></span></h3>
					<form class="pay-choice" action="item.php?">
						<?php echo "<input type='hidden' name='item' value=".$item.">"?>
						<?php echo "<input type='hidden' name='addtocart' value=".$item.">"?>
						<input type="radio" name="pay" value="50"> $50<br>
						<input type="radio" name="pay" value="30"> $30<br>
						<input type="radio" name="pay" value="20"> $20<br>
						<input type="radio" name="pay" value="10"> $10<br>
						<input type="radio" name="pay" value="other"> Other <input id="other-text" style="display:none;"type="text"><br>
						<input type="submit" class="atc-button" value="Add to Cart"/>
					</form>
				</div>
			</div>
		</div>
	</main>
	<?php include 'footer.php'; ?>
</body>
</html>