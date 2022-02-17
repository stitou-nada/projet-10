<?php 
    if ( !empty($_POST)) { 
        // post values
        $LastName = $_POST['prenom'];
        $FirstName    = $_POST['nom'];
        $Age    = $_POST['Age'];
		
      
		$person = array($prenom, $name , $Age ); 
      
		$fichier = file_get_contents('person.json');
		$data = json_decode($fichier);
	
		array_push($data, $person);
		file_put_contents("person.json", json_encode($data));
		header("Location: index.php");

    }
?>
<div>
        <div>
		<div><h3>ajoute</h3>
        <form method="POST" action="">
			<div>
				<label >prenom</label>
				<input type="text"  name="prenom" >
			</div>
			
			<div>
				<label >name</label>
				<input type="text"  name="name" >
			</div>
			
			<div>
				<label >Age</label>
				<input type="text"  name="Age" >
			</div>
			<div class="form-actions">
					<button type="submit">ajoute</button>
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>