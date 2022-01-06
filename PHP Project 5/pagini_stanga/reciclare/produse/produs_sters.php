<?php

$id = $_POST['id'];

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'reciclare');

$res = mysqli_query($conn, 'delete from produse where id = "' . $id . '"');
header('Location: ../../pag5.html');
