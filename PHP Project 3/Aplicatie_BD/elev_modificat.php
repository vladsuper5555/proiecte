<?php
session_start();
$conexiune = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexiune, 'postuniv');

mysqli_query($conexiune, 'update elev set nume_elev="' . $_POST['nume'] . '", prenume_elev="' . $_POST['prenume'] . '", id_clasa=' . $_POST['clasa'] . ' where id=' . $_SESSION['id_elev']);

?>
<meta http-equiv="refresh" content="0;url=lista_elevi.php">