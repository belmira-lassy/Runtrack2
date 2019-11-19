
<html>
    <body>

            <?php

//*Création string affecter y "On nest pas le meilleur quand on le croit mais quand on le sait"*//
//*Un dictionnaire insert keys "consonnes" et "voyelles"+ algorithme parcourant le comtpe, etc..*//
//* affichage des résultats dans un teableau html ayant comme thead "Voyelles" et "Consonnes". 

                
                $str = "On nest pas le meilleur quand on le croit mais quand on le sait";
               $dictio = array ("consonnes" => 0, "voyelles" => 0);
                $voyelles =  array ("a", "e", "i", "o", "u", "y","O");
                $i = 0 ;
                $strlength = strlen ($str);

                while ( $i < $strlength) {
                    if (in_array ($str [$i], $voyelles ) )  
                    {
                        $dictio ["voyelles"] =  $dictio ["voyelles"] + 1;
                        
                    }
                    else if($str [$i] != " " ) 
                    {
                        $dictio ["consonnes"] =  $dictio ["consonnes"] + 1;
                        
                    }
                    $i++;
                }
                
            ?>



            <table>
                <thead>
                    <tr>
                        <th><?php echo "Voyelles"?></th>
                        <th><?php echo "Consonnes"?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $dictio ["voyelles"]; ?></td>
                        <td><?php echo $dictio ["consonnes"];?></td>
                    </tr>
                </tbody>
            </table>
            
    </body>

</html>

