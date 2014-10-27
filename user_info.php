<?php
    $result_users = mysqli_query($con, "SELECT * FROM users");
	if (!$result_users) { // add this check.
	    die('Invalid query: ' . mysql_error());
	}
?>
<h3>User Information</h3>
					<div class="inner-container">
						<h4>Users</h4>
                        <table><?php
						echo '<tr class="title"><td>Remove</td><td>User Id</td><td>Username</td><td>Password</td><td>Email</td><td>Access</td></tr>';
				        while ($row = mysqli_fetch_array($result_users)) {
                            if($row['active']==0){
                                echo '<tr>';
                                echo '<td><a class="editu" href=#>x</a></td>';
                                echo '<td data="">'.$row['id'].'</td>';
                                echo '<td data="username">'.$row['username'].'</td>';
                                echo '<td data="password">'.$row['password'].'</td>';
                                echo '<td data="email">'.$row['email'].'</td>';
                                echo '<td data="type">'.$row['type'].'</td>';
                                echo '</tr>';
                            }
						}?>
                        </table>
                        <h4>Add user</h4>
                        <form class="flex" method="get">
                            <div>
                                <label for="name">Name</label><br>
                                <input type="text" name="name">
                            </div>
                            <div>
                                <label for="password">Password</label><br>
                                <input type="text" name="password">
                            </div>
                            <div>
                                <label for="email">Email</label><br>
                                <input type="text" name="email">
                            </div>
                            <input type="hidden" name="adduser">
                            <input type="submit">
                        </form>
					</div>