<footer>
	<div class="container">
		<div class="flex child50 flex-center">
			<div class="flex footer-nav">
				<ul>
					<li><span class="red">Pages</span></li>
					<li><a href="home.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<?php 
                        if(isset($_SESSION['username'])){
                            if(checkpriv($con,$_SESSION['username'])==1){
                                echo "<li><a href='admin.php'>Admin</a></li>";
                            }
                            else{
                                echo "<li><a href='client.php'>My Account</a></li>";
                            }
                        }
                    ?>
				</ul>
				<ul>
					<li><span class="red">Bundles</span></li>
					<li><a href="item.php?item=6">Movie Bundle</a></li>
					<li><a href="item.php?item=7">Music Bundle</a></li>
					<li><a href="item.php?item=8">Game Bundle</a></li>
					<li><a href="item.php?item=9">Book Bundle</a></li>
					<li><a href="item.php?item=10">App Bundle</a></li>
				</ul>
				<ul>
					<li><span class="red">Contact</span></li>
					<li><a href="mailto:Contact@TheBundleHub.com">Contact@TheBundleHub.com</a></li>
				</ul>
				<div></div>
			</div>
			<ul class="flex footer-social">
				<li><a href=#><img src="img/facebook.png" /></a></li>
				<li><a href=#><img src="img/twitter.png" /></a></li>
				<li><a href=#><img src="img/googleplus.png" /></a></li>
			</ul>
		</div>
	</div>
	<h6 class="text-center">This site is not official and is an assignment for a UCF Digital Media course; designed by Josh Delgado</h6>
</footer>