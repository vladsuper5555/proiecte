<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'biblioteca');

$id = $_POST['elev'];

mysqli_query($conn, 'delete from utilizatori where id_utilizator = ' . $id);
mysqli_query($conn, 'delete from imprumut where id_utilizator = ' . $id);
header('Location: ../../biblioteca_virtuala.php');
