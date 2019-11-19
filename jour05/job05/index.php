<?php
/* Créez une focntion nommées "occurences", celle ci.... du caractère "char" dans "str"*/

$str = "Hello my name is Belmira";
$char = "o";

function ocurrences($str, $char)
{
    echo substr_count($str, $char);
}

ocurrences($str, $char);


?>