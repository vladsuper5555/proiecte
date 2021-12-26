Lista elevilor
<ul>
	<?php
	$conexiune = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($conexiune, 'postuniv');

	$selectare_elevi = mysqli_query($conexiune, 'select id,nume_elev,prenume_elev from elev');
	while ($inregistrare = mysqli_fetch_array($selectare_elevi)) {
		echo '<li>' . $inregistrare['nume_elev'] . ' ' . $inregistrare['prenume_elev'] . ' <a href="modificare_elev.php?id=' . $inregistrare['id'] . '">Modifica</a>
     <a href="stergere_elev.php?id=' . $inregistrare['id'] . '">Sterge</a> 
	 <a href="vizualizare_note_elev.php?id=' . $inregistrare['id'] . '">Vizualizare note</a> 
	 <a href="vizualizare_medie_elev.php?id=' . $inregistrare['id'] . '">Vizualizare medie</a></li>';
	}

	?>
	<a href="index.php">Inapoi</a>
</ul>