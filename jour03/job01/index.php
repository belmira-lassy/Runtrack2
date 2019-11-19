<?php


//*X(X étant un nombre de ce tableau ) est paire <br/>*//
//*X(X étant un nombre de ce trableau) est impaire <br/>*//


$str = array (200, 204, 173, 98,171,404,459);
$i = 0;


while($i <= 6)
{

    if ($str [$i] % 2 == 0)
    {

    echo $str [$i]."paire"."<br/>";
   
    }

    else //($str [$i] % 2 == 1)//
    {

    echo $str [$i]. " impaire". "<br/>";
      
    }
    $i=$i + 1;
}

?>
