<?php
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$titlu = $_POST['titlu'];
$an = $_POST['an'];

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'biblioteca');
mysqli_query($conn, 'insert into carti (nume_autor, prenume_autor, titlul_cartii, anul_aparitiei) value ("' . $nume . '" , "' . $prenume . '" , "' . $titlu . '" , "' . $an . '" );');
header('Location: ../../biblioteca_virtuala.php');
