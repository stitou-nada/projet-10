<?php  
include 'configuration.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $selectQuery = "SELECT * FROM persone WHERE id=$id";
        
        $result = mysqli_query($connectData, $selectQuery);
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        
            
            
            $prenom = $data[0]['Prenom'];
            $nom = $data[0]['Nom'];
            $age = $data[0]['Age'];
             
            
       
    }

    if(!empty($_POST)){
        
        $prenom = $_POST['Prenom'];
        $nom = $_POST['Nom'];
        $age = $_POST['Age'];

        $sqlUpdateQuery ="UPDATE persone SET 
        Prenom='$prenom',Nom='$nom',Age='$age' WHERE id=$id ";

        $result = mysqli_query($connectData, $sqlUpdateQuery);
        header('location: index.php');
        
    };
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method='post'>
	
	<input type="text" name="Prenom" value=" <?php echo $prenom?>">
	<input type="text" name="Nom"  value=" <?php echo $nom?>">
	<input type="text" name="Age"  value=" <?php echo $age?>">
	
	<button type='submit'>ajoute</button>
	</form>
</body>
</html>