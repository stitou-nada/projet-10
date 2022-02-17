
<?php
$fichier = file_get_contents('person.json');
$data = json_decode($fichier);
?>

		<a href="insert.php"><i></i> Insert Data</a>
			<table>
				<tr>
					<th>Prenom</th>
					<th>nom</th>
					<th>Age</th>
				</tr>		
				<?php foreach ($data as $person)
				      
				
				?>
				<tr>
					
					<td><?php echo $person[0]; ?></td>
					<td><?php echo $person[1]; ?></td>
					<td><?php echo $person[2]; ?></td>
					
					
				</tr>
				
			</table>
	

</body>
</html>