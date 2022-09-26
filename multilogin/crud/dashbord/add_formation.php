<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
      
        $th=$_POST['theme'];
        $m=$_POST['mode'];
        $l=$_POST['lieu'];
        $gv=$_POST['gouvernort'];
        $ddu=$_POST['bdate1'];
        $da=$_POST['bdate2'];
        $tdu=$_POST['btime1'];
        $ta=$_POST['btime2'];
        $pause=$_POST['ptime1'];
        $pa=$_POST['ptime2'];
        $chk="";  
   foreach($c as $chk1)  
      {  
         $chk .= $chk1.",";
         } 
        
          $req="INSERT INTO formation(theme,mode,lieu,gouvernorat,periode,fin_periode,temps,
                 fin_t,pause,fin_p)
   
                 VALUES ('$th','$m','$l','$gv','$ddu','$da','$tdu','$ta','$pause','$pa')";

		//use for MySQLi OOP
		if($conn->query($req)){
			$_SESSION['success'] = 'Formation added successfully';
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

	header('location: index_formation.php');
?>