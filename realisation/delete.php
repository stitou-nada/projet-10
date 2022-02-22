<?php
    include "configuration.php";
    include "employeManager.php";
    
        if(isset($_GET['id'])){
            $id = $_GET['id'];
           
            $employeManager = new EmployeManager();
            $employeManager->deleteEmploye($connectData, $id);
            header('Location: index.php');   
    }
?>