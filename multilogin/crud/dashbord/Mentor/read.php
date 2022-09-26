<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Course Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.6.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" >
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html" >CNI</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a class="active" href="courses.php">Courses</a></li>
          <li><a href="trainers.php">Trainers</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="http://localhost/stage2/logout.php">logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="courses.php" class="get-started-btn">Get Started</a>

    </div>
  </header>
  <!-- End Header -->

<section >
<?php include('connection.php')?>

<?php
$id=$_GET['read'];
       
  $affiche_formation="SELECT *
        
        from formation 
        where id_c=$id";
        
      

      $resultaffiche=mysqli_query($conn,$affiche_formation);
      while($ligne=mysqli_fetch_assoc($resultaffiche))
   {
?>
<section style="margin-left:300px; margin-top:100px">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
    <div class="card-header">
    <?php echo "<h3 class='text-success'>mode de formation :</h3> ".$ligne['mode'];?>
  </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo "<h3 class='badge bg-primary text-wrap'>theme de formation: </h3> ".$ligne['theme']; ?><h3></h5>
    
     <?php echo "<h3 class='badge bg-primary text-wrap'>lieu de formation :</h3> ".$ligne['lieu'];?><br>
     <?php echo "<h3 class='badge bg-primary text-wrap'>gouvernorat de formation :</h3> ".$ligne['gouvernorat'];?><br>
     <?php echo "<h3 class='badge bg-primary text-wrap'>Periode de formation :</h3> ".$ligne['periode'];?> <?php echo "<h3 class='badge bg-primary text-wrap'>Fin de formation :</h3> ".$ligne['fin_periode'];?><br>
     <?php echo "<h3 class='badge bg-primary text-wrap'>Temps de formation :</h3> ".$ligne['temps'];?> <?php echo "<h3 class='badge bg-primary text-wrap'>Fin de Temps de formation :</h3> ".$ligne['fin_t'];?><br>
     <?php echo "<h3 class='badge bg-primary text-wrapr'>Pause de formation :</h3> ".$ligne['pause'];?> <?php echo "<h3 class='badge bg-primary text-wrap'>Fin de pause :</h3> ".$ligne['fin_p'];?><br>
     <h4 class='p-3 mb-2 bg-danger text-white'>si tu peut participer a cette formation remplir le formulaire </h4>
     
   <form form method="POST" action="">
  <div class="mb-3">
    <label  class="form-label">First Name</label>
    <input type="text" class="form-control"  name="firstname" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  
  <button type="submit"  name="participe" class="btn btn-primary">Submit</button>
</form>
   
      </div>
    </div>
  </div>


   <?php }?>
   </section> 
   <?php
	
	include_once('connection.php');

	if(isset($_POST['participe'])){
		$firstname = $_POST['firstname'];
		$email = $_POST['email'];
    $id=$_GET['read'];
		
		$sql = "INSERT INTO participant (FirstName, email,id_c) VALUES ('$firstname', '$email','$id')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			echo "<script language='Javascript'>

      alert('vous etes participer');
      
      </script>";
		}

		
		else{
			echo 'Something went wrong while adding';
		} 
  }
    ?>
   </section> 
   </body>
   </html>  