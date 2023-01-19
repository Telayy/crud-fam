<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$product_family = $_POST['product_family'];
		$sql = "INSERT INTO fam (family) VALUES ('$product_family')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Product family added successfully';
		}
		

		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>
