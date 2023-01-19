<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$fam_id = $_POST['fam_id'];
		$family = $_POST['product_family'];
		$sql = "UPDATE fam SET family = '$family' WHERE fam_id = '$fam_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Product family updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating product family';
		}
	}
	else{
		$_SESSION['error'] = 'Select product family to edit first';
	}

	header('location: index.php');

?>