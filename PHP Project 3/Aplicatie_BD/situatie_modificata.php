<?php

$id = $_POST['id'];
$nota = $_POST['nota_noua'];

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'postuniv');

mysqli_query($conn, 'update situatie set nota = "' . $nota . '" where id = "' . $id . '"');

header("Location: http://localhost/proiecte/PHP%20Project%203/Aplicatie_BD/index.php");
