<?php
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$cnp = $_POST['cnp'];

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'biblioteca');
mysqli_query($conn, 'insert into utilizatori (cnp_utilizator, nume_utilizator, prenume_utilizator) value ("' . $cnp . '" , "' . $nume . '" , "' . $prenume . '");');
header('Location: ../../biblioteca_virtuala.php');
