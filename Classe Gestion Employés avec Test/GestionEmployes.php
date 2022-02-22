<?php
 include 'employe.php';
class GestionEmployes{
    private $Connection = Null;

    private function getConnection(){

         $this->Connection = mysqli_connect('localhost', 'test', 'test123', 'demo');
            // Vérifier l'ouverture de la connexion avec la base de données



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
    public function afficher(){
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
}
?>