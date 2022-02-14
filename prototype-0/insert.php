<?php 
    if ( !empty($_POST)) { 
        // post values
        $LastName = $_POST['LastName'];
        $FirstName    = $_POST['FirstName'];
        $Age    = $_POST['Age'];
      
		$person = array($FirstName, $LastName , $Age); 
      
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
				<label >First Name</label>
				<input type="text"  name="FirstName" >
			</div>
			
			<div>
				<label >Last Name</label>
				<input type="text"  name="LastName" >
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