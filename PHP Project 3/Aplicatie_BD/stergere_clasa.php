<?php
$conexiune = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexiune, 'postuniv');

mysqli_query($conexiune, 'delete from clasa where id_clasa=' . $_GET['clasa']);
mysqli_query($conexiune, 'update elev set id_clasa=0 where id_clasa=' . $_GET['clasa']);
header(
    'Location: http://localhost/proiecte/PHP%20Project%203/Aplicatie_BD/index.php'
    );
