<?php
 include 'employe.php';
class GestionEmployes{

    private $Connection = Null;

    private function getConnection(){
        
            $this->Connection = mysqli_connect('localhost', 'test', 'test123', 'demo');
           

        
        
        return $this->Connection;
        
    }
    
    public function Ajouter($employe){

        $nom = $employe->getNom();
        $prenom = $employe->getPrenom();
        $Date_de_naissance = $employe->getDate_de_naissance();
        // requête SQL
        $sql = "INSERT INTO personnes(Nom, Prenom,Date_de_naissance) 
                                VALUES('$nom', '$prenom', '$Date_de_naissance')";

        mysqli_query($this->getConnection(), $sql);
    }

    

    public function afficher(){
        $sql = 'SELECT id, Nom, Prenom, Date_de_naissance FROM personnes';
        $query = mysqli_query($this->getConnection() ,$sql);
        $employes_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $tableEmployes = array();
        foreach ($employes_data as $employe_data) {
            $employe = new Employe();
            $employe->setId($employe_data['id']);
            $employe->setNom($employe_data['Nom']);
            $employe->setPrenom ($employe_data['Prenom']);
            $employe->setDate_de_naissance($employe_data['Date_de_naissance']);
            array_push($tableEmployes, $employe);
        }
        return $tableEmployes;
    }


    public function RechercherParId($id){
        $sql = "SELECT * FROM personnes WHERE id= $id";
        $result = mysqli_query($this->getConnection(), $sql);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $employe_data = mysqli_fetch_assoc($result);
        $employe = new Employe();
        $employe->setId($employe_data['id']);
        $employe->setNom($employe_data['Nom']);
        $employe->setPrenom ($employe_data['Prenom']);
        $employe->setDate_de_naissance ($employe_data['Date_de_naissance']);
        
        return $employe;
    }

    public function Supprimer($id){
        $sql = "DELETE FROM personnes WHERE id= '$id'";
        mysqli_query($this->getConnection(), $sql);
    }

    public function Modifier($id,$nom,$prenom,$Date_de_naissance)
    {
        // Requête SQL
        $sql = "UPDATE personnes SET 
        Nom='$nom', Prenom='$prenom', Date_de_naissance='$Date_de_naissance'
        WHERE id= $id";

        //  
        mysqli_query($this->getConnection(), $sql);

        //
       
    }

}
?>