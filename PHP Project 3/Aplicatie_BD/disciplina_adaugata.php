<?php
$conexiune = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexiune, 'postuniv');

mysqli_query($conexiune, "insert into disciplina(denumire_disc) values ('" . $_POST['nume'] . "')");

echo '<meta http-equiv="refresh" content="0;url=adaugare_disciplina.php">';
