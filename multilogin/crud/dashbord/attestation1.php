<?php
include("connection.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Attestation</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="css/design.css" rel="stylesheet">
<link href="css/att.css" rel="stylesheet">
	<link rel="stylesheet" href="fh.css">
	<style>
		.height10{
			height:10px;
      
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
  
<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">CNI</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			
			<ul>
				<li>
					<a href="index.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Gestion Membres</span>
					</a>
				</li>
				<li>
            <a href="index_formateur.php"> 
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Gestion Formateur</span>
					</a>
				</li>
				<li>
					<a href="index_formation.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Gestion_Formation</span>
					</a>
				</li>
				
				<li>
					<a href="attestation1.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
						<path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
						<path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
						</svg>
						<span>Les attestation</span>
					</a>
				</li>
				<li>
        <a href="http://localhost/stage2/logout.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
      
		</nav>
    
        <div>    
     <button  class="btn btn-lg btn-primary" onclick="show_hide()"> Voir Les Attestaion</button>
 </div>
 
 
 <div id="show_hide" class="container">
   <section>
    <?php


 
$req="select f.mode as mode,f.theme as theme,f.periode as periode,p.FirstName 
       from `formation` f,`participant` p
       
       where  
         f.id_c=p.id_c
       
       
          
       ";
      

       $result=mysqli_query($conn,$req);
       if (mysqli_num_rows($result)==0){
       echo "aucun enregistrement trouve";
   }else{
   
   
     
       while($row=mysqli_fetch_array($result)){
       echo"
       
        <table  >
       <tr>
          <td>
           <div>	
              <img src='css/cni.jpg' width='150px' height='120px'>
           </div>
         </td> 
           <td>
             
           </td>

           <td>
          <center>
           <svg xmlns='http://www.w3.org/2000/svg' width='150' height='150' fill='currentColor' class='bi    bi-award' viewBox='0 0 16 16'>
             <path d='M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z'/>
            <path d='M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z'/>
          </svg>
         </center>
       </td>
        </tr>
       <tr>
        
        <td></td>

      </tr>
      <tr>
        <td colspan='3'>
          <h1>
             <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-star' viewBox='0 0 16 16'>
           <path d='M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z'/>
          </svg>
        
         Attestation 
              
      
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-star' viewBox='0 0 16 16'>
           <path d='M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z'/>
         </svg>
       </h1>
     </td>

      </tr>
      <tr>
       <td colspan='3'>
         <h2>
          de participation
         </h2>
 
       </td>
     </tr>
     <tr>
       <td colspan='3'>
         <center>
           <hr class='new5'>
         </center>
       </td> 
     </tr>

    
         <tr>
          
             <td colspan='3'>
              <h3 class='des'>décerné à</h3>
            </td>
            
        </tr>
        <tr>
     
     
     <td colspan='3'>
       <h2 class='bas' style="color: green;">".$row['FirstName']."</h2>
     </td>
           
       </tr>
        
    <tr>
       <td></td>
    
     <td>
       <p class='cord'>	Pour avoir participe
     
       a la formation ".$row['mode']." 
      
       anime par CNI
       </p>
      </td> 
      <td></td>
    </tr>
          <tr>
              <td class='dat'>
            <h3>Date</h3>
         </td>
         <td>
           
         </td>
              <td class='sig'>
           <h3>Signature</h3>
         </td>
          </tr>
          <tr>
              <td ></td>
              <td ></td>
         <td ></td>

          </tr>
          <tr>
              <td class='dat'>
           <h3> ".$row['periode']."</h3>
         </td>
         <td></td>
              <td colspan='2'>
           <img src='css/Signature.png' class='Signature' width='300px'>
         </td>
          </tr> </tbody>
       </table>"
 ;
   }
   
   }
   

   ?>
   </div>
    </section>
    
 

   
    <script src="show_Hide.js"></script>


    </body>
    </html>