<?php

include "GestionEmployes.php";
$employe = new Employe();
$gestion = new GestionEmployes();
$employe->setNom("stitou");
echo ($gestion->Ajouter($employe));


$data= $gestion->afficher();




foreach($data as $value){
echo $value->getNom();
} 


?>