<?php

//*créez une string et affectez y "I'm sorry Dave I'm afraid I can't do that."*//
//*Créer un algorithme qui parcourt cette chaîne et affiche uniquement les voyyelles*//



$str = "I'm sorry Dave I'm afraid I can't do that";

$voyelles = array("a", "e", "i", "o", "u", "y", "I");

$i = 0;

$strlegnth = strlen($str);

while ($i < $strlegnth) {
    
    if(in_array($str[$i], $voyelles)) 
     {
         echo $str[$i];
     }
    $i++;
}
?>


