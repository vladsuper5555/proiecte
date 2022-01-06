<?php

$nume = $_POST['nume'];
$id = $_POST['id'];

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'reciclare');

$res = mysqli_query($conn, 'update firme set nume = "' . $nume . '" where id = "' . $id . '"');
header("Location: ../../pag5.html");
