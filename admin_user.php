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
		<div class="container client" >
			<h2><span class="red">[</span>Admin View<span class="red">]</span></h2>
			<hr>
			<ul class="flex">
				<li><a href="admin_user.php">User Information</a></li>
				<li><a href="admin_inventory.php">Inventory</a></li>
				<li><a href="admin_review.php">Review Orders</a></li>
			</ul>
            <div>
                <div class="client_item">
                    <?php include 'user_info.php'; ?>
                </div>
            </div>
<!--
Split these into pages
have the pages filter
then refresh
just like on that old final for Moshell
-->
		</div>
	</main>
	<?php include 'footer.php'; ?>
</body>
</html>