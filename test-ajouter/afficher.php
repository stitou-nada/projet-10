<?php

include "GestionEmployes.php";

$gestion = new GestionEmployes;

$data =$gestion->Afficher();

foreach($data as $value){

    echo $value->getPrenom();
    echo '</br>';
    echo $value->getNom();
    echo '</br>';
    echo $value->getAge();
    }



    ?>
