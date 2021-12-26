<?php
$id = $_POST['de_modificat'];
$disciplina = $_POST['denumire_disciplina'];

$conexiune = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexiune, 'postuniv');

mysqli_query($conexiune, "update disciplina set denumire_disc='" . $_POST['denumire_disciplina'] . "' where id_materie=" . $id);

header("Location: http://localhost/proiecte/PHP%20Project%203/Aplicatie_BD/index.php");
