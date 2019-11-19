<?php
//*Développer un algorithme qui affiche un tableau HTML il doit y avoir deux colonnes: argument et valeur*//
//* Créez un formulaire html de type POST avec different input*//
?>

<form  action="index.php" method="post">
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
                    <th>Valeur</th>	
					<th>Argument</th>
									
				</thead>
				
				<tbody>
<?php				
	foreach($_POST as $args => $value)
	{
		echo "<tr><td>".$args."</td><td>".$value."</td></tr>";
	}
	
	echo "</tbody>";
?>