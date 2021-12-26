<?php
$conexiune=mysqli_connect('localhost','root','');
mysqli_select_db($conexiune,'postuniv');

mysqli_query($conexiune, "insert into elev(nume_elev, prenume_elev,id_clasa) values('".$_POST['nume']."','".$_POST['prenume']."',".$_POST['clasa'].")");

echo '<meta http-equiv="refresh" content="0;url=adaugare_elev.php">';
