<?php

$id = $_POST['id'];
$prod = $_POST['produs'];
$cate = $_POST['cnt'];
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'reciclare');
for ($i = 1; $i <= $cate; $i++)
    mysqli_query($conn, 'insert into produse (id_firma, nume_prod) values ("' . $id . '", "' . $prod . '")');
header('Location: ../../pag5.html');
