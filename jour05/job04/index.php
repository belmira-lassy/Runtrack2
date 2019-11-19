
		<?php
/* Créez une focntion nommée "calcule" qui prend 3 parametres...., la fonction doit retourner le résultat de l'opération.*/
			$a = 25;
			$operation = "/";
			$b = 5;
			
			function calcul($a, $operation, $b)
			{
				if ($operation = '/')
				{
					$final = $a / $b;
				}
				elseif ($operation = '+')
				{
					$final = $a + $b;
				}
				elseif ($operation = '-')
				{
					$final = $a - $b;
				}
				elseif ($operation = '*')
				{
					$final = $a * $b;
				}
				elseif ($operation = '%')
				{
					$final = $a % $b;
				}
				
				return($final);
			}
		
			$affichage = calcul($a, $operation, $b);
		
			echo $affichage;
		?>
