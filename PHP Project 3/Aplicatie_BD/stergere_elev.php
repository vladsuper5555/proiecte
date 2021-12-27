<?php
$conexiune = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexiune, 'postuniv');
mysqli_query($conexiune, 'delete from elev where id=' . $_GET['elev']);
header(
    'Location: http://localhost/proiecte/PHP%20Project%203/Aplicatie_BD/index.php'
);
