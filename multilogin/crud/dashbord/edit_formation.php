<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id_c = $_POST['id_c'];
		
		$theme = $_POST['theme'];
		$mode = $_POST['mode'];
		$lieu = $_POST['lieu'];
        $gouvernorat = $_POST['gouvernorat'];
        $periode = $_POST['periode'];
        $f_periode = $_POST['f_periode'];
        $temps = $_POST['temps'];
        $f_temps = $_POST['f_temps'];
        $pause = $_POST['pause'];
        $f_pause = $_POST['f_pause'];
		$sql = "UPDATE formation SET  theme = '$theme', mode = '$mode', lieu = '$lieu', 
        gouvernorat = '$gouvernorat' , periode = '$periode' , fin_periode = '$f_periode' , temps = '$temps'
        , fin_t = '$f_temps' , pause = '$pause' , fin_p = '$f_pause'
        WHERE id_c = '$id_c'";

		
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

	header('location: index_formation.php');

?>