<form method="post" action="disciplina_adaugata.php">
	Nume disciplina
	<input type="text" name="nume">
	<input type="submit" value="ok">
	<a href="index.php">Inapoi</a>
</form>

<?php
$conexiune = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexiune, 'postuniv');

$selectie_discipline = mysqli_query($conexiune, "select denumire_disc from disciplina");
while ($inregistrari = mysqli_fetch_array($selectie_discipline)) {
	echo $inregistrari['denumire_disc'] . "<br>";
}


?>