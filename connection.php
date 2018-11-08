<?php 

	$dbhost = "localhost";
	$dbname = "phppdo";
	$dbuser = "root";
	$dbpass = "";
	
	try{
		$connection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	catch(PDOException $e){
		echo "Error !".$sql.$e->getMessage();
	}
?> 
