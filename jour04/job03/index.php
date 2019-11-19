
<?php
//* Développez un Algo affichant le Nb d'arguments POST*//
//* Tester, créez un formulaire html de type POST différents input*//
?>

<?php
	$count = 0;
	foreach ($_POST as $cle => $valeur) {
		if ($valeur != NULL)
		{
			$count +=1;
		}
	}
    echo $count;
    
?>

<form method="Post" action="index.php">
    <label for="nom">Nom</label>
    <input type="text" name="nom">
    
    <label for="mail">Mail</label>
    <input type="text" name="mail">
    
    <label for="Ville">Ville</label>
    <input type="text" name="Ville">

    <label for="age">Age</label>
    <input type="number" name="age">
  
    <input type="submit" value="envoyer">
</form>




