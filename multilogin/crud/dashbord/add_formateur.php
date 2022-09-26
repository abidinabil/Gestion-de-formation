<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$LastName = $_POST['LastName'];
		$FirstName = $_POST['FirstName'];
		$specialite = $_POST['specialite'];
		$direction = $_POST['direction'];
		$sql = "INSERT INTO formateur (LastName,FirstName, specialite, direction) VALUES ('$LastName','$FirstName', '$specialite', '$direction')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Formateur added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index_formateur.php');
?>