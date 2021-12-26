<?php
session_start();
$_SESSION['id_elev'] = $_GET['id'];
?>
<form method="post" action="elev_modificat.php">

	<?php
	$conexiune = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($conexiune, 'postuniv');

	$selectie_elev = mysqli_query($conexiune, 'select * from elev where id=' . $_GET['id']);
	$inregistrare = mysqli_fetch_array($selectie_elev);

	?>


	Nume <input type="text" name="nume" value="<?php echo $inregistrare['nume_elev']; ?>">
	Prenume <input type="text" name="prenume" value="<?php echo $inregistrare['prenume_elev']; ?>">
	Clasa <select name="clasa">
		<?php

		$selectie_clasa = mysqli_query($conexiune, 'select * from clasa');
		while ($inregistrare_clasa = mysqli_fetch_array($selectie_clasa)) {
			if ($inregistrare['id_clasa'] == $inregistrare_clasa['id_clasa'])
				echo '<option value="' . $inregistrare_clasa['id_clasa'] . '" selected>' . $inregistrare_clasa['denumire'] . ' </option>';
			else
				echo '<option value="' . $inregistrare_clasa['id_clasa'] . '">' . $inregistrare_clasa['denumire'] . ' </option>';
		}
		if ($inregistrare['id_clasa'] == 0)
			echo '<option value="0" selected>Nu este alocat unei clase! </option>';

		?>
	</select>
	<input type="Submit" value="ok">

</form>