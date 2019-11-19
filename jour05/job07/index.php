
		<form method="post">
			<input type="text" name="str">
			<select name="fonction">
				<option value="gras">Gras</option>
				<option value="cesar">Cesar</option>
				<option value="laplateforme">LaPlateforme_</option>
			</select>
			<input type="submit" value="Bouton"/>
		</form>
		
		<?php
			$str = $_POST["str"];
			$fonction = $_POST["fonction"];
		
			switch ($fonction) 
			{
				case gras:
					
					break;
				case cesar:
						
					break;
				case laplateforme:
					
					break;
			}
		?>
