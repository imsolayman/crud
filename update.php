<?php require_once('header.php'); ?> 
		<form action="" method="post">
			<label for="">Name</label>
			<input type="text" name="name" value="<?php if(isset($_GET['edit_id'])){ echo $edit_row['name']; }; ?>" />
			<label for="">Date</label>
			<input type="text" name="date" value="<?php if(isset($_GET['edit_id'])){ echo $edit_row['date']; }; ?>" />
			<label for="">Email</label>
			<input type="text" name="email" value="<?php if(isset($_GET['edit_id'])){ echo $edit_row['email']; }; ?>" />
			<label for="">Role</label>
			<input type="text" name="role" value="<?php if(isset($_GET['edit_id'])){ echo $edit_row['role']; }; ?>" />
			<?php if(isset($_GET['edit_id'])){
			?>
			<input type="submit" name="update" value="Update"/>
			<?php 
			}else{
			?>
			<input type="submit" name="save" value="Save"/>	
			<?php 
			}; ?>
		</form>
<?php require_once('footer.php'); ?> 