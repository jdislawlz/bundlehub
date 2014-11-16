<?php
 include 'php/functions.php';
?>
<html>
<head>
    <title>Bundle Hub Cart - Josh Delgado</title>
    <?php include 'meta.html' ?>
</head>
<body>
	<?php include 'header.html'; ?>
	<main>
		<div class="container">
		<?php displayCart($con,$_SESSION['items']); ?>
		<a href="payment.php">Checkout</a>
		</div>
	</main>
	<?php include 'footer.php'; ?>
</body>
</html>