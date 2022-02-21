<?php

    include 'configuration.php';
	include 'employe.php';
	include 'employeManager.php';

   if(!empty($_POST)){
	   $employe = new Employe();
	   $employeManager=new EmployeManager();

	   $employe->setFirstName($_POST['prenom']);
	   $employe->setLastName($_POST['nom']);
	   $employe->setAge($_POST['age']);

	   $employeManager->insertEmploye($connectData,$employe);
	   header("Location: index.php");
   }

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v7 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action=""method="POST">
					<h3>SAISISSEZ LES INFORMATIONS  </h3>
					<label class="form-group">
						<input type="text" class="form-control"  name="prenom"  required>
						<span>Prenom </span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="nom" required>
						<span for="">Nom</span>
						<span class="border"></span>
					</label>
					<label class="form-group" >
					<input type="text" class="form-control" name="age" required>
						<span for="">Age</span>
						<span class="border"></span>
					</label>
					<button>ajoute
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>