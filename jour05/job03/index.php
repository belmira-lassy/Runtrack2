<!doctype html>
<html>
	<head>
	<body>
		<?php
			function gethello()
			{
				$final = "Hello LaPlateforme!";
				
				return($final);
			}
			
			$nom = gethello();
		
			echo $nom;
		?>

	</body>
</html>