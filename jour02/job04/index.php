<?php

$nombre=0;

while( $nombre <=100)
{
  
if($nombre %3 == 0 && $nombre %5 !=0) //Multiples de trois// 
    {   echo"Fizz";
        echo"<br/>";
        $nombre++;
        
    }

elseif ( $nombre % 5 == 0 && $nombre %3 !=0) //Multiples de cinq
	{
		echo "Buzz";
        echo "<br/>";
        $nombre++;
		
	}
 
elseif ($nombre % 3 == 0 && $nombre % 5 == 0)//Multiples de trois et de cinq//
    {
     echo "FizzBuzz";
     echo "<br/>";
     $nombre++;
    }
    else{
    echo $nombre;
    echo "<br/>";
    $nombre++;
    }

    
}
?>
