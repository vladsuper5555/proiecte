<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'biblioteca');

$id = $_POST['elev'];
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$cnp = $_POST['cnp'];

mysqli_query($conn, 'update utilizatori set nume_utilizator = "' . $nume . '", prenume_utilizator = "' . $prenume . '", cnp_utilizator = "' . $cnp . '" where id_utilizator = ' . $id);

header('Location: ../../biblioteca_virtuala.php');
