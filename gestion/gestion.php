<?php 
include "employe.php";

class gestion{


    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'test', 'test123', 'demo');
           
         
       
        
        return $this->Connection;
        
    }

public function afficher($Prenom){
        $SelctRow = "SELECT *  FROM personnes WHERE prenom='$Prenom'";
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $employes_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($employes_data as $value_Data) {
            $employe = new Employe();
            $employe->setId($value_Data['id']);
            $employe->setmatricule($value_Data['Matricule']);
            $employe->setPrenom ($value_Data['Prenom']);
            $employe->setNom($value_Data['Nom']);
            $employe->setdate_de_naissance ($value_Data['Date_de_naissance']);
            $employe->setdepartement ($value_Data['Departement']);
            $employe->setsalaire ($value_Data['Salaire']);
            $employe->setfonction ($value_Data['Fonction']);
            $employe->setphoto ($value_Data['Photo']);
            array_push($TableData, $employe);
        }
          return $TableData;
        }
        }
    ?>
