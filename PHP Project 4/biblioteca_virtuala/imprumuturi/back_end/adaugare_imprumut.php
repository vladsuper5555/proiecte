<?php
$id_utilizator = $_POST['carte'];
$id_carte = $_POST['elev'];
$out = $_POST['out'];
$in = $_POST['in'];

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'biblioteca');
mysqli_query($conn, 'insert into imprumut (id_carte, id_utilizator, data_imprumut, data_retur) value ("' . $id_utilizator . '" , "' . $id_carte . '" , "' . $out . '" , "' . $in . '" );');
header('Location: ../../biblioteca_virtuala.php');
