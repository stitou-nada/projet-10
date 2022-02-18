<?php

    class EmployeeManager {

        public function getAllEmployees($conn){
            $sqlGetData = 'SELECT id, Prenom, Nom, Age FROM persone';
            $result = mysqli_query($conn ,$sqlGetData);
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $data;
        }


        public function insertEmployee($conn, $employee){
            $firstName = $employee->getFirstName();
            $lastName = $employee->getLastName();
            $age = $employee->getAge();
            $gender = $employee->getGender();

                 // sql insert query
        $sqlInsertQuery = "INSERT INTO persone(Prenom,Nom,Age,id) 
                            VALUES('$firstName', 
                                    '$lastName',
                                    '$age', 
                                    '$gender')";

        mysqli_query($conn, $sqlInsertQuery);
        }


        public function deleteEmployee($conn, $id){
            $sqlDeleteQuery = "DELETE FROM persone WHERE id= '$id'";

            mysqli_query($conn, $sqlDeleteQuery);
        }


        public function editEmployee($conn, $employee, $id){
            $first_name = $employee->getFirstName();
            $last_name = $employee->getLastName();
            $gender = $employee->getGender();
            $age = $employee->getAge();
     
            // Update query
            $sqlUpdateQuery = "UPDATE persone SET 
                         Prenom='$first_name', Nom='$last_name', Age='$age'
                         WHERE id=$id";
     
             // Make query 
             mysqli_query($conn, $sqlUpdateQuery);
       
        }

        public function getEmployee($conn, $id){
            $sqlGetQuery = "SELECT * FROM persone WHERE id= $id";
    
        // get result
        $result = mysqli_query($conn, $sqlGetQuery);
    
        // fetch to array
        $employee = mysqli_fetch_assoc($result);
        return $employee;
        }
    }


    
?>