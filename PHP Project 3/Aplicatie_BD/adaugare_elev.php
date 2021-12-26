<form method="post" action="elev_adaugat.php">
	Nume<input type="text" name="nume"><br>
	Prenume<input type="text" name="prenume"><br>
	Clasa<select name="clasa" size="3" style="margin: 5px">
		<?php
		$conexiune = mysqli_connect('localhost', 'root', '');
		mysqli_select_db($conexiune, 'postuniv');

		$selectie_clasa = mysqli_query($conexiune, "select * from clasa");
		while ($inregistrare = mysqli_fetch_array($selectie_clasa))
			echo '<option value="' . $inregistrare['id_clasa'] . '">' . $inregistrare['denumire'] . '</option>';
		?>
	</select>
	<br>
	<input type="submit" value="ok"> <br>
	<a href="index.php">Inapoi</a>
</form>