Lista disciplinelor care pot fi modificate:
<ul>
	<?php
	$conexiune = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conexiune, "postuniv");

	$selectie_discipline = mysqli_query($conexiune, "select * from disciplina");
	while ($inregistrare = mysqli_fetch_array($selectie_discipline)) {
		echo '<li>' . $inregistrare['denumire_disc'] . '      <a href="modificare_disciplina.php?cod=' . $inregistrare['id_materie'] . '">Modifica</a></li>';
	}

	?>

</ul>