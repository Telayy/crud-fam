<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['fam_id'])){
		$sql = "DELETE FROM fam WHERE fam_id = '".$_GET['fam_id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Product family deleted successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting product family';
		}
	}
	else{
		$_SESSION['error'] = 'Select a product family to delete first';
	}

	header('location: index.php');
?>