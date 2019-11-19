<!doctype html>
<html>

    <head>


        <body>
                <?php
                /* Créez une fonction "bonjour" Celle-ci prend en paramètre un booléen nommée jour.
                si Jour= true la fonction doit afficher "bonjouré, si Jour=false la fonction doit afficehr "bonsoir"*/


                $jour=true;

                function bonjour($jour)
                {
                    if ( $jour == 1 )
                    {
                        echo "Bonjour!";
                    }
                    else if ($jour==0)
                    {
                        echo "Bonsoir";
                    }
                }
              
                bonjour($jour);
                ?>
        </body>
</html>

