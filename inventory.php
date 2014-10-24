<?php
    if(isset($_GET['edit'])){
        $edit = $_GET['edit'];
        $result = mysqli_query($con, "SELECT * FROM products WHERE productid=$edit");
    }
    else{
        $result = mysqli_query($con, "SELECT * FROM products");
    }
	if (!$result) { // add this check.
	    die('Invalid query: ' . mysql_error());
	}
?>
<h3>Inventory</h3>
					<div class="inner-container">
						<h4>Inventory</h4>
						<table><?php
						echo '<tr class="title"><td>Remove</td><td>Product Id</td><td>Name</td><td>Category</td><td>SKU</td><td>Price</td><td>Rating</td></tr>';
							while ($row = mysqli_fetch_array($result)) {
                                if($row['active']==0){
                                    echo '<tr>';
                                    echo '<td><a href="?edit='.$row['productid'].'">x</a></td>';
                                    echo '<td>'.$row['productid'].'</td>';
                                    echo '<td>'.$row['name'].'</td>';
                                    echo '<td>'.$row['category'].'</td>';
                                    echo '<td>'.$row['sku'].'</td>';
                                    echo '<td>'.$row['price'].'</td>';
                                    echo '<td>'.$row['rating'].'</td>';
                                    echo '</tr>';
                                }
							}?>
						</table>
						<h4>Edit/Add Item</h4>
						<form class="flex" method="post">
							<div>
								<label for="name">Name</label><br>
								<input type="text" name="name">
							</div>
							<div>
								<label for="description">Description</label><br>
								<input type="text" name="description">
							</div>
							<div>
								<label for="category">Category</label><br>
								<input type="text" name="category">
							</div>
							<div>
								<label for="sku">SKU</label><br>
								<input type="text" name="sku">
							</div>
							<div>
								<label for="tier">Tier</label><br>
								<input type="text" name="tier">
							</div>
                            <input type="hidden" name="additem" value="checked">
                            <input type="submit">
						</form>
					</div>