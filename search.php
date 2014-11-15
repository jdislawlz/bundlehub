<?php
	include 'php/functions.php';

	if(checkpriv($con,$_SESSION['username'])!=1){
	    header('Location: home.php');
	}
?>
<html>
<head>
    <title>Bundle Hub Client - Josh Delgado</title>
    <?php include 'meta.html' ?>
</head>
<body>
	<?php include 'header.html'; ?>
	<main>
		<div class="container">
			<h2 class="text-center">Search Results</h2>
			<?php 	
				$term = $_GET['search'];
				searchdb($con, $term);
			?>
		</div>
	</main>
	<?php include 'footer.php'; ?>
</body>
</html>