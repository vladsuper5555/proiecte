<?php
$conexiune = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexiune, 'postuniv');
echo '<ul>';
$selectie_disciplina = mysqli_query($conexiune, 'select id,nota from situatie where id_materie= 3');
while ($inregistrare_situatie = mysqli_fetch_array($selectie_disciplina)) {
	$selectie_elevi = mysqli_query($conexiune, 'select nume_elev, prenume_elev from elev where id=' . $inregistrare_situatie['id']);
	$inregistrare_elev = mysqli_fetch_array($selectie_elevi);
	echo '<li>' . $inregistrare_elev['nume_elev'] . ' ' . $inregistrare_elev['prenume_elev'] . ' ' . $inregistrare_situatie['nota'] . '</li>';
}
echo '</ul>';
?>
<a href="index.php">Inapoi</a>