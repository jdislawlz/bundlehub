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
						echo '<tr class="title"><td>Remove</td><td>User Id</td><td>Username</td><td>Password</td><td>Email</td></tr>';
				        while ($row = mysqli_fetch_array($result_users)) {
                            if($row['active']==0){
                                echo '<tr>';
                                echo '<td><a class="edit-button" href="?delete_user='.$row['id'].'" data="'.$row['id'].'">x</a></td>';
                                echo '<td>'.$row['id'].'</td>';
                                echo '<td>'.$row['username'].'</td>';
                                echo '<td>'.$row['password'].'</td>';
                                echo '<td>'.$row['email'].'</td>';
                                echo '</tr>';
                            }
						}?>
                        </table>
					</div>