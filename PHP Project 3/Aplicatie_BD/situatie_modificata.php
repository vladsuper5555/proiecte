<?php

$id = $_POST['id'];
$nota = $_POST['nota_noua'];

$chestii = explode('//', $id);

$id_elev = $chestii[0];
$id_materie = $chestii[1];
$data = $chestii[2];
$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'postuniv');

mysqli_query($conn, 'update situatie set nota = "' . $nota . '" where id = "' . $id_elev . '" and id_materie = "' . $id_materie . '" and data = "' . $data . '"');

header("Location: http://localhost/proiecte/PHP%20Project%203/Aplicatie_BD/index.php");
