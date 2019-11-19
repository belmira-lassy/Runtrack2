<?php 
	$compteur = 2;
		while ($compteur <= 1001){
				$a = 0;
		for ($i = 1; $i <= $compteur; $i++){
				if ($compteur % $i == 0){
						$a++;
					}
				}
				
		if ($a == 2) {
				echo $compteur, '<br/>';
				}
			$compteur++;
			}
		?>
