<?php
    include "configuration.php";

    
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sqlDelete = "DELETE FROM persone WHERE id= '$id'";

            mysqli_query($connectData, $sqlDelete);
            header('Location: index.php');
            
        
    }
?>