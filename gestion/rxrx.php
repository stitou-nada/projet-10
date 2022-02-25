<form action="" method="POST">
<input type="text" name="cherch">
</form>
<?php
    include "Gestion.php";
    // Trouver tous les employés depuis la base de données 
    if(!empty($_POST)){

        $Prenom = $_POST["cherch"];
    $gestionEmployes = new gestion();
    $data = $gestionEmployes->afficher($Prenom);


foreach($data as $value){


echo  $value->GetPrenom();
echo  $value->GetNom();
echo  $value->getmatricule();
}

}
?>


