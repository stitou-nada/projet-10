<?php

include "GestionEmployes.php";
// Trouver tous les employés depuis la base de données 
$gestionEmployes = new GestionEmployes();

if(!empty($_POST)){
	$employe = new Employe();
	$employe->setNom($_POST['Nom']);
	$employe->setPrenom($_POST['Prenom']);
	$employe->setDate_de_naissance($_POST['Date_de_naissance']);
	$gestionEmployes->Ajouter($employe);
	
	// Redirection vers la page index.php
	header("Location: index.php");
}
?>

<body>

<h1>Ajouter un employé</h1>

<form action="" method="POST">
Prenom : <input type="text" name="Prenom" >
Nom: <input type="text" name="Nom" >
Date_de_naissance : <input type="date"  name="Date_de_naissance" >

<button type="submit">modifier</button>
</form>
</body>
</html>