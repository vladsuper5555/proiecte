<?php

$nume = $_POST['nume'];

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'reciclare');
mysqli_query($conn, 'insert into firme (nume) values ("' . $nume . '")');
header("Location: ../../pag5.html");
