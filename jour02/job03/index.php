<?php
$nombre = 0;
while ( $nombre <= 100) {
    for ($nombre; $nombre <=20 ; $nombre++) {
        echo "<i>".$nombre."</i>";
		echo "<br/>";
    }
    for ($nombre; $nombre <25 ; $nombre++) {
        echo $nombre;
		echo "<br/>";
    }
    for ($nombre; $nombre <=50 ; $nombre++) {
        if ($nombre == 42) {
			echo "LaPlateforme";
			echo "<br/>";
		}
		else{
			echo "<u>".$nombre."</u>";
	        echo "<br/>";
		}
    } 
    echo $nombre;
    echo "<br/>";
    $nombre++;
}

?>