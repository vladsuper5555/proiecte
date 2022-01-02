<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'biblioteca');

$id = $_POST['carte'];
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$titlu = $_POST['titlu'];
$an = $_POST['an'];


mysqli_query($conn, 'update carti set nume_autor = "' . $nume . '", prenume_autor = "' . $prenume . '", titlul_cartii = "' . $titlu . '", anul_aparitiei = "' . $an . '" where id_carte = ' . $id);
header('Location: ../../biblioteca_virtuala.php');
