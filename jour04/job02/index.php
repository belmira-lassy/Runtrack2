<?php
//*Dévelipper un algorithme ... il doit y avoir deux colonnes: argument et valeur*//
?>

<form  action="index.php" method="get">
    <label for="nom">Nom</label>
    <input type="text" name="nom">
    
    <label for="prénom">Prénom</label>
    <input type="text" name="prénom">
 
    <label for="age">Age</label>
    <input type="number" name="age">
   <br/>
    <input type="submit" value="envoyer">
</form>


	<table>
				<thead>
					<th>Argument</th>
					<th>Valeur</th>				
				</thead>
				
				<tbody>
<?php				
	foreach($_GET as $args => $value)
	{
		echo "<tr><td>".$args."</td><td>".$value."</td></tr>";
	}
	
	echo "</tbody>";
?>