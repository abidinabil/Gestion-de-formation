<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id_f = $_POST['id_f'];
		$LastName = $_POST['LastName'];
		$FirstName = $_POST['FirstName'];
		$specialite = $_POST['specialite'];
		$direction = $_POST['direction'];
		$sql = "UPDATE formateur SET LastName = '$LastName', FirstName = '$FirstName', specialite = '$specialite', direction = '$direction' WHERE id_f = '$id_f'";

		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index_formateur.php');

?>