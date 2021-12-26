Lista clase
<ul>
	<?php
	$conexiune = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($conexiune, 'postuniv');

	$selectie_clasa = mysqli_query($conexiune, 'select * from clasa');
	while ($inregistrare = mysqli_fetch_array($selectie_clasa)) {
		echo '<li>' . $inregistrare['denumire'] . ' <a href="stergere_clasa.php?id_clasa=' . $inregistrare['id_clasa'] . '">Stergere</a></li>';
	}

	?>
</ul>
<a href="index.php">Inapoi</a>