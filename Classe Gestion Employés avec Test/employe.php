<?php

class Employe{
    private $Id;
    private $Nom;
    private $Prenom;
    private $Age;

    public function getId() {
        return $this->Id;
    }
    public function setId($id) {
        $this->Id = $id;
    }

    public function getNom() {
        return $this->Nom;
    }
    public function setNom($nom) {
        $this->Nom = $nom;
    }

    public function getPrenom() {
        return $this->Prenom;
    }
    public function setPrenom($prenom) {
        $this->Prenom = $prenom;
    }

    public function getAge() {
        return $this->Age;
    }
    public function setAge($Age) {
        $this->Age = $Age;
    }

}

     
?>