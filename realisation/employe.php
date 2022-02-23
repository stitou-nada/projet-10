<?php
    class Employe {
        private $id;
        private $firstName;
        private $lastName;
        private $Date_de_naissance;

        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }

        public function getFirstName(){
            return $this->firstName;
        }

        public function setFirstName($value){
            $this->firstName = $value;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function setLastName($value){
            $this->lastName= $value;
        }

  

        public function getDate_de_naissance(){
            return $this->Date_de_naissance;
        }

        public function setDate_de_naissance($value){
            $this->Date_de_naissance = $value;
        }
    }
?>