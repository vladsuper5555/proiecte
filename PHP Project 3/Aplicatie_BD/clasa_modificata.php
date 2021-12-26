<?php
$id = $_POST['de_modificat'];
$newval = $_POST['denumire_clasa'];

$conexiune = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexiune, 'postuniv');

$res = mysqli_query($conexiune, "update clasa set denumire = '" . $newval . "' where id_clasa = '" . $id . "'");

header("Location: http://localhost/proiecte/PHP%20Project%203/Aplicatie_BD/index.php");
