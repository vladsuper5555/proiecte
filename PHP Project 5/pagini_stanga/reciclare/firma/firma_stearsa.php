<?php

$id = $_POST['id'];
$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'reciclare');

mysqli_query($conn, 'delete from firme where id = "' . $id . '"');
mysqli_query($conn, 'delete from produse where id_firma = "' . $id . '"');
header('Location: ../../pag5.html');
