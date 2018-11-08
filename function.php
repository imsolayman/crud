
		<?php 
			require_once('connection.php');
			if(isset($_POST['save'])){
				$name = $_POST['name'];
				$date = $_POST['date'];
				$email = $_POST['email'];
				$role = $_POST['role'];
				$sql = "INSERT INTO info(name,date,email,role) VALUES(:name,:date,:email,:role)";
				$stmt = $connection->prepare($sql);
				$stmt->bindparam('name', $name);
				$stmt->bindparam('date', $date);
				$stmt->bindparam('email', $email);
				$stmt->bindparam('role', $role);
				$stmt->execute();
				//header("Location: index.php");
				echo "Data has been inserted successfully";
			};
			
			$sql = "SELECT * FROM info";
			$stmt = $connection->prepare($sql);
			$stmt->execute();
			
			if(isset($_GET['delete_id'])){
				$id = $_GET['delete_id'];
				$sql = "DELETE FROM info WHERE id = :id";
				$stmt = $connection->prepare($sql);
				$stmt->bindparam(':id', $id);
				$stmt->execute();
				header("Location: index.php");
			};
			
			if(isset($_GET['edit_id'])){
				$id = $_GET['edit_id'];
				$sql = "SELECT * FROM info WHERE id = :id";
				$stmt = $connection->prepare($sql);
				$stmt->bindparam(':id', $id);
				$stmt->execute();
				$edit_row = $stmt->FETCH(PDO::FETCH_ASSOC);
			};
			
			if(isset($_POST['update'])){
				$id = $_GET['edit_id'];
				$name = $_POST['name'];
				$date = $_POST['date'];
				$email = $_POST['email'];
				$role = $_POST['role'];
				$sql = "UPDATE info SET name = :name, date = :date, email = :email, role = :role WHERE id = :id";
				$stmt = $connection->prepare($sql);
				$stmt->bindparam('name', $name);
				$stmt->bindparam('date', $date);
				$stmt->bindparam('email', $email);
				$stmt->bindparam('role', $role);
				$stmt->bindparam('id', $id);
				$stmt->execute();
				//header("Location: index.php");
				echo "Data has been updated successfully";
			};
		?>