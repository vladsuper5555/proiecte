<?php
$conexiune = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexiune, 'postuniv');

mysqli_query($conexiune, 'delete from clasa where id_clasa=' . $_GET['id_clasa']);
mysqli_query($conexiune, 'update elev set id_clasa=0 where id_clasa=' . $_GET['id_clasa']);
?>
<meta http-equiv="refresh" content="0;url=lista_clase.php">