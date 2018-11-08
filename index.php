<?php require_once('header.php'); ?>
			<thead>
				<!--<td>Id</td>--->
				<td>Name</td>
				<td>Date</td>
				<td>Email</td>
				<td>Role</td>
				<td>Update</td>
				<td>Delete</td>
			</thead>
				<?php 
					if($stmt->rowCount() > 0){
						while($row = $stmt->FETCH(PDO::FETCH_ASSOC)){
				?>
			<tr>
				<!---<td><?php // echo $row['id']; ?> </td>---->
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['role']; ?></td>
				<td><a onclick="return confirm('Are you sure?')" href="update.php?edit_id=<?php echo $row['id']; ?>">Edit</a></td>
				<td><a onclick="return confirm('Are you sure?')" href="create.php?delete_id=<?php echo $row['id']; ?>">Delete</a></td>
			</tr>			
				<?php 			
						}
					}
				?>
<?php require_once('footer.php'); ?>