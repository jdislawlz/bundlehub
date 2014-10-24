<?php
 include 'php/functions.php';
?>
<html>
<head>
    <title>Bundle Hub Home - Josh Delgado</title>
    <?php include 'meta.html' ?>
</head>
<body>
	<?php include 'header.html'; ?>
	<main>
        <div class="banner-image">
            <img src="http://placehold.it/1600x350&text=Banner+Image" style="width:100%;" />
        </div>
		<div class="container">
			<div class="flex child50">
				<div>
					<div>
						<h3>News</h3>
						<h5 class="red"><a href=#>Announcement Post</a></h5>
						<p>Short excerpt from the blog that ends with an ellipses to entice the user to read mor...</p>
						<h5 class="red"><a href=#>Announcement Post</a></h5>
						<p>Short excerpt from the blog that ends with an ellipses to entice the user to read mor...</p>
					</div>
					<div>
						<h3>Sign Up for our Newsletter</h3>
						<p>Things and stuff about why you should sign up. Because you should, cause yeah. Awesome cool right bingo players yeah aweomse cool. Because you should, cause yeah. Awesome cool right bingo players yeah aweomse cool.</p>
						<p>Because you should, cause yeah. Awesome cool right bingo players yeah aweomse cool.</p>
						<form class="float-right">
							<input type="text" name="newsletter" value="name@server.com">
							<input class="submit-fix" type="submit" value="Sign Up">
						</form>
					</div>
				</div>
				<hr>
				<div>
					<?php featuredItem($con); ?>
				</div>
			</div>
		</div>
	</main>
	<?php include 'footer.php'; ?>
</body>
</html>