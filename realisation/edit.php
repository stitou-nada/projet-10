<?php
    include 'configuration.php';
    include 'employe.php';
    include 'employeManager.php';
// Pour afficher Row 
    $employeManager=new EmployeManager();

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $affichervalue = $employeManager->SelectRowEdit($connectData,$id);

    }

// Pour modifier Row

    if (!empty($_POST)){
        
        $employe =new Employe();

        $employe->setFirstName($_POST['prenom']);
        $employe->setLastName($_POST['nom']);
        $employe->setAge($_POST['age']);
        $employeManager->EditEmloye($connectData,$employe,$id);
        header('Location: index.php');
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
						<input type="text" class="form-control"  name="prenom" value=<?php echo $affichervalue['Prenom']?> required>
						<span>Prenom </span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="nom" value=<?php echo $affichervalue['Nom']?> required>
						<span for="">Nom</span>
						<span class="border"></span>
					</label>
					<label class="form-group" >
					<input type="text" class="form-control" name="age" value=<?php echo $affichervalue['Age']?> required>
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