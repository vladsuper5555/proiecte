<?php
$conexiune = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexiune, 'postuniv');

mysqli_query(
    $conexiune,
    'update elev set nume_elev="' .
        $_POST['nume'] .
        '", prenume_elev="' .
        $_POST['prenume'] .
        '", id_clasa=' .
        $_POST['clasa'] .
        ' where id=' .
        $_POST['de_modificat']
);

header(
    'Location: http://localhost/proiecte/PHP%20Project%203/Aplicatie_BD/index.php'
);
