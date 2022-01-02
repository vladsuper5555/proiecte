<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'biblioteca');

$id = $_POST['carte'];

mysqli_query($conn, 'delete from carti where id_carte = ' . $id);
mysqli_query($conn, 'delete from imprumut where id_carte = ' . $id);
header('Location: ../../biblioteca_virtuala.php');
