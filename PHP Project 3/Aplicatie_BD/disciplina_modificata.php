<?php
session_start();
$conexiune = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexiune, 'postuniv');

mysqli_query($conexiune, "update disciplina set denumire_disc='" . $_POST['denumire_disciplina'] . "' where id_materie=" . $_SESSION['cod']);
?>
<meta http-equiv="refresh" content="0;url=lista_discipline.php">