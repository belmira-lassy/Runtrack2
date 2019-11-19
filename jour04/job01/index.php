
<?php
//* Développez un Algo affichant le Nb d'arguments GET*//
//* TEster, créez un formulaire html de type GET différents input*//
?>

<form method="get" action="index.php">
    <label for="nom">Nom</label>
    <input type="text" name="nom">
    
    <label for="prénom">Prénom</label>
    <input type="text" name="prénom">
    
    <label for="Ville">Ville</label>
    <input type="text" name="Ville">

    <label for="age">Age</label>
    <input type="number" name="age">
  
    <input type="submit" value="envoyer">
</form>



<?php
	$count = 0;
	foreach ($_GET as $cle => $valeur) {
		if ($valeur != NULL)
		{
			$count +=1;
		}
	}
	echo $count;
?>


