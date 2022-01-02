<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'biblioteca');

$id = $_POST['id'];
$ids = explode('/', $id);
mysqli_query($conn, 'delete from imprumut where id_carte = "' . $ids[0] . '" and id_utilizator = "' . $ids[1] . '"');
header('Location: ../../biblioteca_virtuala.php');
