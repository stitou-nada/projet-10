<?php
 include 'Employe.php';
class GestionEmployes{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'test', 'test123', 'demo');
           
         
       
        
        return $this->Connection;
        
    }
    
    public function Ajouter($employe){

    
        $matricule = $employe->getmatricule();
        $prenom = $employe->getPrenom();
        $nom = $employe->getNom();
        $Date_de_naissance = $employe->getdate_de_naissance();
        $Departement = $employe->getdepartement();
        $Salaire = $employe->getsalaire();
        $Fonction = $employe->getfonction();
        $Photo = $employe->getphoto();
        // requête SQL
        $insertRow="INSERT INTO personnes(Matricule, Prenom,Nom,Date_de_naissance,Departement,Salaire,Fonction,Photo) 
                                VALUES('$matricule', '$prenom','$nom', '$Date_de_naissance' ,'$Departement' ,'$Salaire' ,'$Fonction' ,'$Photo')";

        mysqli_query($this->getConnection(), $insertRow);
    }

    

    public function afficher(){
        $SelctRow = 'SELECT id, Matricule, Nom, Prenom,Date_de_naissance,Departement,Salaire,Fonction,Photo FROM personnes';
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

// pour afficher dans input
    public function RechercherParId($id){
        $SelectRowId = "SELECT * FROM personnes WHERE id= $id";
        $result = mysqli_query($this->getConnection(),  $SelectRowId);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $employe_data = mysqli_fetch_assoc($result);
        $employe = new Employe();
        $employe->setId($employe_data['id']);
        $employe->setmatricule($employe_data['Matricule']);
        $employe->setPrenom ($employe_data['Prenom']);
        $employe->setNom($employe_data['Nom']);
        $employe->setdate_de_naissance ($employe_data['Date_de_naissance']);
        $employe->setdepartement ($employe_data['Departement']);
        $employe->setsalaire ($employe_data['Salaire']);
        $employe->setfonction ($employe_data['Fonction']);
        $employe->setphoto ($employe_data['Photo']);
        
        return $employe;
    }

    public function Supprimer($id){
        $RowDelet = "DELETE FROM personnes WHERE id='$id'";
        mysqli_query($this->getConnection(), $RowDelet);
    }

    public function Modifier($id,$matricule,$prenom,$nom, $date_de_naissance ,$Departement ,$Salaire,$Fonction ,$Photo){
        // Requête SQL
        $RowUpdate = "UPDATE personnes SET 
        Matricule='$matricule',Nom='$nom', Prenom='$prenom', Date_de_naissance='$date_de_naissance' ,Departement='$Departement',Salaire='$Salaire',Fonction='$Fonction',Photo='$Photo'
        WHERE id=$id";

        mysqli_query($this->getConnection(),$RowUpdate);

    }
 

}
?>