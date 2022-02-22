<?php

include "GestionEmployes.php";
$employe = new Employe();
$gestion = new GestionEmployes();
$employe->setNom("stitou");
echo ($gestion->Ajouter($employe));



?>