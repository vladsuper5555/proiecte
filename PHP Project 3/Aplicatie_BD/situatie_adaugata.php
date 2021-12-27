<?php


$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'postuniv');

$id_elev = $_POST['elev'];
$nota = $_POST['nota'];
$materie_id = $_POST['materie'];
$date = $_POST['data_nota'];
$res = mysqli_query($conn, 'insert into situatie (id, id_materie, data, nota) values (' . $id_elev . ", " . $materie_id . " , '" . $date . "' ," . $nota . ')');

header("Location: http://localhost/proiecte/PHP%20Project%203/Aplicatie_BD/index.php");
