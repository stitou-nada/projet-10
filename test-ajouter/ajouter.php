<?php
include "GestionEmployes.php";


$gestion = new GestionEmployes;
$employe = new Employe; 

$employe->setPrenom("stitou");
$employe->setNom("nada");
$employe->setAge("20");


echo ($gestion->Ajouter($employe));


?>