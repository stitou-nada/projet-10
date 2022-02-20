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


<body>


<form action="" method="POST">
Prenom : 	<input type="text" name="prenom" >
Nom: 		<input type="text" name="nom" >
Age : 		<input type="text" name="age" >
   
<button type="submit">ajoute</button>

</form>


</body>