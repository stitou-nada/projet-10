<?php
 include 'employe.php';
class GestionEmployes{

    private $Connection = Null;

    private function getConnection(){
        if(is_null($this->Connection)){
            $this->Connection = mysqli_connect('localhost', 'test', 'test123', 'demo');
            // Vérifier l'ouverture de la connexion avec la base de données
            if(!$this->Connection){
                $message =  'Erreur de connexion: ' . mysqli_connect_error(); 
                throw new Exception($message); 
            }
        }
        
        return $this->Connection;
        
    }
    
    public function Ajouter($employe){

        $nom = $employe->getNom();
        $prenom = $employe->getPrenom();
        $age = $employe->getAge();
        // requête SQL
        $sql = "INSERT INTO persone(Nom, Prenom,Age) 
                                VALUES('$nom', '$prenom', '$age')";

        mysqli_query($this->getConnection(), $sql);
    }

    

    public function RechercherTous(){
        $sql = 'SELECT Id, Nom, Prenom, Age FROM persone';
        $query = mysqli_query($this->getConnection() ,$sql);
        $employes_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $tableEmployes = array();
        foreach ($employes_data as $employe_data) {
            $employe = new Employe();
            $employe->setId($employe_data['Id']);
            $employe->setNom($employe_data['Nom']);
            $employe->setPrenom ($employe_data['Prenom']);
            $employe->setAge ($employe_data['Age']);
            array_push($tableEmployes, $employe);
        }
        return $tableEmployes;
    }


    public function RechercherParId($id){
        $sql = "SELECT * FROM Employes WHERE Id= $id";
        $result = mysqli_query($this->getConnection(), $sql);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $employe_data = mysqli_fetch_assoc($result);
        $employe = new Employe();
        $employe->setId($employe_data['Id']);
        $employe->setNom($employe_data['Nom']);
        $employe->setPrenom ($employe_data['Prenom']);
        $employe->setAge ($employe_data['Age']);
        
        return $employe;
    }

    // public function Supprimer($id){
    //     $sql = "DELETE FROM Employes WHERE Id= '$id'";
    //     mysqli_query($this->getConnection(), $sql);
    // }

    // public function Modifier($id,$nom,$prenom,$age)
    // {
    //     // Requête SQL
    //     $sql = "UPDATE persone SET 
    //     Nom='$nom', Prenom='$prenom', Age='$age'
    //     WHERE Id= $id";

    //     //  
    //     mysqli_query($this->getConnection(), $sql);

    //     //
    //     if(mysqli_error($this->getConnection())){
    //         $msg =  'Erreur' . mysqli_errno($this->getConnection());
    //         throw new Exception($msg); 
    //     } 
    // }

}
?>